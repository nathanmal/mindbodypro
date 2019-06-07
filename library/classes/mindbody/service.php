<?php

namespace Mindbody;

use \Mindbody\Cache;
use \Mindbody\API;
use \Mindbody\Request;
use \Mindbody\Response;
use \Mindbody\Result;

/**
 * Main Service class
 *
 * Handles service calls and caching of data, as well as parsing of response objects
 *
 */
class Service
{
  
  /**
   * The service class instance
   * @var [type]
   */
  private $service;

  /**
   * The service name
   * @var string
   */
  public $serviceName;

  /**
   * API Credentials
   * @var \Mindbody\Service\<servicetype>\SourceCredentials
   */
  private $sourceCredentials;

  /**
   * API User Credentials
   * @var \Mindbody\Service\<servicetype>\UserCredentials
   */
  private $userCredentials;

  /**
   * Holds errors
   * @var array
   */
  public $errors = array();

  /**
   * The method called   
   * @var string
   */
  public $method = '';

  /**
   * The method object used to call a request
   * @var \Mindbody\Service\<ServiceType>\<Method>
   */
  public $requestMethod;

  /**
   * Request object
   * @var \Mindbody\Service\<ServiceType>\MBRequest
   */
  public $request;

  /**
   * Response object
   * @var \Mindbody\Service\<ServiceType>\MBResponse
   */
  public $response;

  /**
   * Result object
   * @var \Mindbody\Result;
   */
  public $result;

  /**
   * Whether or not we should use test mode
   * @var boolean
   */
  public $testMode = FALSE;

  /**
   * If true, will use sandbox instead of live data
   * @var boolean
   */
  public $sandbox = FALSE;

  /**
   * Service Constructor
   * @param string       $service     [description]
   * @param array        $credentials [description]
   * @param bool|boolean $sandbox     [description]
   * @param bool|boolean $testMode    [description]
   */
  public function __construct( string $service, array $credentials = array(), bool $sandbox = FALSE, bool $testMode = FALSE )
  { 
    // Service Name
    $this->serviceName = ucfirst($service) . 'Service';

    // Load the service
    $this->service = $this->getClass( ucfirst($service) . '_x0020_Service' );

    // Set sandbox
    $this->sandbox = (bool) $sandbox;

    // Set test mode
    $this->testMode = (bool) $testMode;

    // Set credentials
    $this->setCredentials( $credentials );

    // Set sandbox credentials if using sandbox site
    if( $this->sandbox )
    {
      $this->setSandboxUserCredentials();
    }
  }

  /**
   * Perform a service call (magic method)
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public function __call( $method, $args )
  {
    if( method_exists($this->service, $method) )
    {
      return $this->request( $method, $args );
    }

    return FALSE;
  }

  /**
   * Accessor for the service object
   * @return [type] [description]
   */
  public function service()
  {
    return $this->service;
  }

  /**
   * Send a service request
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public function request( $method, $args )
  { 
    // Get the method request object
    $this->request = $this->getClass( $method . 'Request', $args );

    // Set method name being called
    $this->method = $method;

    if( $this->request )
    {
      // Set test mode if enabled
      if( $this->testMode && method_exists( $this->request, 'setTest') )
      {
        $this->request->setTest(TRUE);
      }

      // Set source credentials
      $this->request->setSourceCredentials( $this->sourceCredentials );   

      // Set user credentials, if available
      if( ! empty($this->userCredentials) ) 
      {
        $this->request->setUserCredentials( $this->userCredentials );
      }

      if( count($args) === 1 && is_array($args[0]) )
      {
         // Apply arguments
        foreach( $args[0] as $name => $value )
        {
          $setArgument = 'set' . ucfirst($name);

          if( method_exists($this->request, $setArgument) )
          {
            $this->request->{$setArgument}($value);
          }
        }
      }

      // Check for cached response 
      $response = $this->cache( $this->method, $args );

      // If not cached make the call
      if( empty($response) )
      {
        // Set method object
        $methodRequest = $this->getClass( $method, array($this->request) );
        // Get the response
        $response = $this->service->{$method}($methodRequest);
      }

      // Set formatted result
      $this->setResult( $method, $response );

      // Cache the response object
      $this->cache( $method, $args, $response );

    }

    // Allow chaining
    return $this;

  }


  /**
   * Generate an instance of a class used by this service
   * @param  string $class Class Name
   * @param  array  $args  Arguments to pass to class
   * @return mixed         Object instance if successful, FALSE if not
   */
  public function getClass( $class, $args = array() )
  {
    $className = '\\Mindbody\\Service\\' . ucfirst($this->serviceName) . '\\' . ucfirst($class);

    if( class_exists($className) ) 
    { 
      $params = $this->getConstructorProperties($className);
      
      // Create the instance, unpack args if has constructor parameters
      $instance = empty($params) ? new $className() : new $className(...$args);
     
      foreach( $args as $prop => $val )
      { 
        $setMethod = 'set' . ucfirst($prop);

        if( method_exists($instance, $setMethod) )
        {
          $instance->{$setMethod}($val);
        }
      }

      return $instance;
    }
    else
    {
      wp_die('Class ' . $className . ' does not exist');
    }

    return FALSE;
  }

  /**
   * Get formatted result
   * @param string $method   Method called
   * @param object $response \Mindbody\Service\<servicetype>\MBObject
   */
  public function setResult( $method, $response )
  {
    $resultClass = '\Mindbody\Result\\' . $this->serviceName . 'Result';

    if( class_exists($resultClass) ) 
    {
      $this->result = new $resultClass($method, $response);
    } 
    else
    {
      $this->result = new \Mindbody\Result($method, $response);
    }
      
  }

  /**
   * Sorts the result array
   * @param  [type] $property  [description]
   * @param  string $direction [description]
   * @return [type]            [description]
   */
  public function sortBy( $property, $direction = 'ASC' )
  {
    $this->result->sortBy( $property, $direction );

    return $this;
  }

  /**
   * Get the request object
   * @return [type] [description]
   */
  public function getRequest()
  {
    return $this->request;
  }

  /**
   * Get the result object
   * @return [type] [description]
   */
  public function getResult()
  {
    return $this->result;
  }

  /**
   * Get result data
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public function getData( $path = NULL )
  {
    if( ! empty($this->result) ) 
    {
      return empty($path) ? $this->result->getResult() : $this->result->getProperty( $path );
    }

    return NULL;
  }

  /**
   * Prints result data in a <pre> block
   * @return [type] [description]
   */
  public function printData()
  {
    pre($this->getData());
  }


  /**
   * Get the response object from the last request
   * @return [type] [description]
   */
  public function getResponse()
  {
    return $this->result->getResponse();
  }

  /**
   * Test if request was successful
   * @return boolean [description]
   */
  public function isSuccess()
  {
    return $this->getStatus() === 'Success' && $this->getCode() === 200;
  }

  /**
   * Get the last request status string
   * @return [type] [description]
   */
  public function getStatus()
  { 
    return ! empty($this->result) ? $this->result->getStatus() : '';
  }

  /**
   * Get the last request code
   * @return [type] [description]
   */
  public function getCode()
  {
    return ! empty($this->result) ? $this->result->getCode() : NULL;
  }

  /**
   * Get the result count from the last request
   * @return [type] [description]
   */
  public function getResultCount()
  {
    return ! empty($this->result) ? $this->result->getResultCount() : 0;
  }

  /**
   * Get the level of detail sent by the last request
   * @return [type] [description]
   */
  public function getDetail()
  {
    return ! empty($this->result) ? $this->result->getXMLDetail() : NULL;
  }

  /**
   * Get the page index sent by the last request
   * @return [type] [description]
   */
  public function getCurrentPageIndex()
  {
    return ! empty($this->result) ? $this->result->getCurrentPageIndex() : NULL;
  }

  /**
   * Get the total page count of all results from last request
   * @return [type] [description]
   */
  public function getTotalPageCount()
  {
    return ! empty($this->result) ? $this->result->getTotalPageCount() : NULL;
  }
  
  /**
   * Set API Credentials
   * @param array $credentials [description]
   */
  public function setCredentials( $credentials = array() )
  {
    $sourceCredentials = $this->getClass('SourceCredentials');

    if( isset($credentials['SourceName']) )
    {
      $sourceCredentials->setSourceName( $credentials['SourceName'] );
    }

    if( isset($credentials['Password']) )
    {
      $sourceCredentials->setPassword( $credentials['Password'] );
    }

    if( isset($credentials['SiteIDs']) )
    { 
      $SiteIDs = is_array($credentials['SiteIDs']) ? $credentials['SiteIDs'] : array($credentials['SiteIDs']);

      $sourceCredentials->setSiteIDs( $SiteIDs );
    }

    $this->sourceCredentials = $sourceCredentials;
  }

  /**
   * Sets userCredentials to sandbox
   * @see https://developers.mindbodyonline.com/PublicDocumentation/Testing?version=v5.1
   */
  public function setSandboxUserCredentials()
  {
    $userCredentials = $this->getClass('UserCredentials');

    $userCredentials->setUsername( 'Siteowner' );
    $userCredentials->setPassword( 'apitest1234' );
    $userCredentials->setSiteIDs( array(-99) );

    $this->userCredentials = $userCredentials;
  }


  /**
   * Set Staff/Owner credentials
   * @param array $credentials [description]
   */
  public function setUserCredentials( $credentials = array() )
  {
    if( ! empty($credentials) )
    {
      $userCredentials = $this->getClass('UserCredentials');

      $userCredentials->setUsername( $credentials['username'] );
      $userCredentials->setPassword( $credentials['password'] );

      $siteIDs = is_array($credentials['siteIDs']) ? $credentials['siteIDs'] : array($credentials['siteIDs']);

      $userCredentials->setSiteIDs( $siteIDs );

      $this->userCredentials = $userCredentials;
    }
  }


  public function getConstructorProperties( $class )
  {
    $reflector = new \ReflectionClass($class);
    $constructor = $reflector->getConstructor();
    $params = $constructor->getParameters();
    return $params;
    
  }

  /**
   * Return true if API call was successful
   * @return [type] [description]
   */
  public function success()
  {
    return ( 
      ! empty($this->result) 
      && $this->result->getStatus() == 'Success' 
      && $this->result->getCode() == 200 );
  }

  /**
   * Get/Set cached result data
   * @param  [type] $method Method call
   * @param  [type] $args   Arguments used for call
   * @param  [type] $value  Value to set, if setting cache
   * @param  [type] $expire Expiration time in seconds, if setting cache
   * @return [type]         Cached data on success, FALSE on failure
   */
  public function cache( $method, $args, $value = NULL, $expire = NULL )
  { 
    // If no value is specified, we are trying to retrieve a value
    if( is_null($value) ) 
    {
      return Cache::get($method, $args);
    } 
    // Set the cached data
    return Cache::set($method, $args, $value, $expire);
  }

  /**
   * Error handling
   * @param  [type] $msg  [description]
   * @param  [type] $item [description]
   * @return [type]       [description]
   */
  public function error( $msg = NULL, $item = NULL )
  {
    // If no params then we're trying to retrieve the first error
    if( is_null($msg) ) return count($this->errors) ? $this->errors[0] : FALSE;

    // Set error and return false
    $err = $msg . ! is_null($item) ? '[' . $item . ']' : '';

    $this->errors[] = $err;

    return FALSE;
  }


  /**
   * Debug the last request call
   * @return void
   */
  public function debug()
  {
    echo '<h3>Request Object</h3>';
    echo '<pre>';
    var_dump($this->request);
    echo '</pre>';

    echo '<hr/>';

    echo '<h3>Request XML</h3>';
    echo '<textarea class="widefat" rows="10">';
    echo htmlentities( $this->service->__getLastRequest() );
    echo '</textarea>';

    echo '<hr/>'; 

    echo '<h3>Response Object</h3>';
    echo '<pre>';
    var_dump($this->response);
    echo '</pre>';

    echo '<hr/>';

    echo '<h3>Response XML</h3>';
    echo '<textarea class="widefat" rows="10">';
    echo htmlentities( $this->service->__getLastResponse() );
    echo '</textarea>';
  }

  /**
   * Returns true if $array is associative (ie has string keys)
   * @see    https://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential
   * @param  array  &$array Array to check
   * @return boolean         [description]
   */
  public function isAssociative( array &$array )
  {
    return count(array_filter(array_keys($array), 'is_string')) > 0;
  }



  
}