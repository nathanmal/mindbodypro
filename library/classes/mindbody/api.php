<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

use \Mindbody\Exception\APIException;

class API
{
  /**
   * Available Services
   * @var array
   */
  public static $services = array(
    'appointment',
    'class',
    'client',
    // 'data',
    // 'finder',
    'sale',
    'site',
    'staff'
  );

  /**
   * Holds method names keyed by service name
   * @var array
   */
  private static $serviceMethods = array();

  /**
   * Holds method names and their associated service
   * @var array
   */
  private static $methods = array();

  /**
   * Mindbody API Endpoint
   * @var string
   */
  // private static $endpoint = 'https://api.mindbodyonline.com/0_5/';
  // public static $endpoint = 'http://clients.mindbodyonline.com/api/0_5_1/';
  // public static $endpoint = 'https://api.mindbodyonline.com/0_5/';
  public static $endpoint = 'https://api.mindbodyonline.com/0_5_1/';



  /**
   * SOAP options
   * @var array
   */
  public static $options = array(
    'soap_version' => SOAP_1_1,
    'trace' => 1
  );

  /**
   * Sandbox credentials
   * @var array
   */
  private static $sandboxCredentials = array(
    'SiteIDs'    => array(-99),
    'SourceName' => 'Siteowner',
    'Password'   => 'apitest1234'
  );

  /**
   * API Source Name
   * @var [type]
   */
  private $sourceName;

  /**
   * API Password
   * @var [type]
   */
  private $password;

  /**
   * Array of Site IDs
   * @var [type]
   */
  private $siteIDs;

  /**
   * The \SoapClient instance
   * @var [type]
   */
  private $client;

  /**
   * The resulting object from a call
   * @var [type]
   */
  private $result;

  /**
   * Headers returned by a response
   * @var [type]
   */
  public $response_headers;

  /**
   * Whether to use sandbox mode
   * @var boolean
   */
  public $sandbox = FALSE;

  /**
  * Whether or not test mode is used
  * @var boolean
  */
  public $testMode = FALSE;

  /**
   * Kind of detail to request
   * options are 'Bare', 'Basic' and 'Full'
   * @var string
   */
  public $detail = 'Basic';

  /**
   * Hold API errors
   * @var array
   */
  public $errors = array();


  /**
   * Constructor
   * @param [type] $credentials [description]
   */
  public function __construct( $credentials = array(), $service = NULL, $testMode = FALSE, $sandbox = FALSE )
  { 
    // Check for SoapClient Class
    if( ! class_exists('SoapClient') )
    {
      $this->setError('SoapClient not installed');
      return;
    }

    // Set credential array
    $this->setCredentials($credentials);

    // Fetch service methods
    if( empty($service) )
    {
      foreach( self::$services as $serviceName )
      {
        $this->fetchMethods($serviceName);
        $this->generateClasses($serviceName);
      }
    }
    else
    {
      $this->generateClasses($service);
      $this->fetchMethods($service);
    }

    // Set test/sandbox mode
    $this->testMode = (bool) $testMode;
    $this->sandbox  = (bool) $sandbox;

    
  }


  

  /**
   * Call magic method
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public function __call( $method, $args )
  {
    $methods = $this->getMethods();

    if( isset($methods[$method]) ) 
    {
      $service = $methods[$method];

      $arguments = empty($args) ? array() : $args[0];

      return $this->callMindbodyService( $service, $method, $arguments );
    }

    return FALSE;
  }

  /**
   * Get service methods
   * @param  [type] $service [description]
   * @return [type]          [description]
   */
  public function fetchMethods( $service )
  {
    if( isset(self::$serviceMethods[$service]) ) return self::$serviceMethods[$service];

    $wdsl = $this->wdsl($service);

    if( ! empty($wdsl) ) {

      $client = new \SoapClient($wdsl, self::$options);

      $methods = $client->__getFunctions();

      // $types = $client->__getTypes();

      echo '<pre>';
      print_r($types);
      echo '</pre>';

      $serviceMethods = array();

      foreach($methods as $method)
      {
        $s = strpos($method, ' ');
        $p = strpos($method, '(');

        $name = trim(substr($method, $s, $p-$s));
        
        $serviceMethods[] = $name;

        if( ! isset(self::$methods[$name]) ) {
          self::$methods[$name] = $service;
        } else {
          throw new APIException('Duplicate Method: ' . $name);
        }
      }

      self::$serviceMethods[$service] = $serviceMethods;

      return $serviceMethods;
    }

    return FALSE;
  }

  /**
   * Make a SOAP call to a  Mindbody service
   * @param  string  $service Service Name
   * @param  string  $method  Method to call
   * @param  array   $args    Arguments to send
   * @param  boolean $object  TRUE to return an object, otherwise array
   * @return mixed            object/array on succes, FALSE on failure
   */
  public function callMindbodyService( $service, $method, $args = array(), $object = FALSE )
  {
    $wdsl = $this->wdsl($service);

    if( ! empty($wdsl) ) 
    {
      $this->client = new \SoapClient( $wdsl, API::$options );

      $args = $this->requestArgs( $args );
      
      $request = array( 'Request' => $args );
      
      try 
      {
        // $this->result = $this->client->__soapCall( $method, $request, array(), array(), $this->response_headers );
        $this->result = $this->client->{$method}($request);

        // Return the result object if specified
        if( $object ) return $this->result;
      
        // Otherwise, convert to array
        return json_decode( json_encode($this->result), TRUE);
        
      } 
      catch ( \SoapFault $e ) 
      { 
        echo 'SOAPFAULT: ';
        echo $e->getMessage();
        $this->setError( $e->getMessage(), $e->getCode() );
        return FALSE;
      }
      catch ( \Exception $e )
      { 
        echo 'EXCEPTION: ';
        echo $e->getMessage();
        $this->setError( $e->getMessage(), $e->getCode() );
        return FALSE;
      }
    }

    return FALSE;

  }


  public function requestObject( $var )
  {
    if( is_array($var) ) { 
      $var = (object) $var;

      foreach($var as $key => $val){
        $var->{$key} = $this->requestObject($val);
      }
    }

    return $var;

  }

  /**
   * Prepare a request argument array for an API call
   * @param  array  $args [description]
   * @return [type]       [description]
   */
  public function requestArgs( $args = array() )
  {
    if( ! isset($args['SourceCredentials']) )
    {
      $args['SourceCredentials'] = $this->getCredentials();
    }

    return $args;
  }

  /**
   * Set API Credentials
   * @param array $credentials [description]
   */
  public function setCredentials( $credentials = array() )
  {
    if( isset($credentials['SourceName']) )
    {
      $this->sourceName = $credentials['SourceName'];
    }

    if( isset($credentials['Password']) )
    {
      $this->password = $credentials['Password'];
    }

    if( isset($credentials['SiteIDs']) )
    {
      $this->siteIDs = is_array($credentials['SiteIDs']) ? $credentials['SiteIDs'] : array($credentials['SiteIDs']);
    }
  }


  /**
   * Return credentials array
   * @return [type] [description]
   */
  public function getCredentials()
  {
    if( $this->sandbox ) 
    {
      return API::$sandboxCredentials;
    }

    return array(
      'SourceName' => $this->sourceName,
      'Password'   => $this->password,
      'SiteIDs'    => $this->siteIDs
    );
  }

  /**
   * Get array of methods and their associated service
   * @return [type] [description]
   */
  public function getMethods()
  {
    return self::$methods;
  }

  /**
   * Get array of services and their methods
   * @return [type] [description]
   */
  public function getServiceMethods()
  {
    return self::$serviceMethods;
  }


  /**
   * Get information about the last call
   * @return [type] [description]
   */
  public function getLastCallData()
  {
    return array(
      'request' => $this->client->__getLastRequest(),
      'requestHeaders' => $this->client->__getLastRequestHeaders(),
      'response' => $this->client->__getLastResponse(),
      'responseHeaders' => $this->client->__getLastResponseHeaders()
    );
  }

  /**
   * Get WDSL URL for service
   * @param  string $service Service Name
   * @return string          Service URL or empty on failure
   */
  public function wdsl( $service )
  {
    if( ! in_array($service, self::$services) ) 
    {
      throw new APIException('Service not found');
      return '';
    }

    return self::$endpoint . ucfirst($service) . 'Service.asmx?WSDL';
  }

  /**
   * Set an API error
   * @param [type] $error [description]
   * @param [type] $code  [description]
   */
  public function setError( $error, $code = NULL )
  {
    if( ! empty($code) ) $error .= ' [' . $code . ']';

    $this->errors[] = $error; 
  }


  public function getError()
  {
    return ! empty($this->errors) ? $this->errors[0] : FALSE;
  }


}