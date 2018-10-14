<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

use \Mindbody\Cache;
use \Mindbody\API;

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
   * The method last called   
   * @var string
   */
  public $methodName = '';

  /**
   * The method object used to call a request
   * @var \Mindbody\Service\<ServiceType>\<Method>
   */
  public $method;

  /**
   * Method Request
   * @var \Mindbody\Service\<ServiceType>\MBRequest
   */
  public $request;

  /**
   * Result response
   * @var \Mindbody\Service\<ServiceType>\MBResponse
   */
  public $response;

  /**
   * Formatted result based on response data
   * @var [type]
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
   * Service constructor
   * @param [type] $api [description]
   */
  public function __construct( $service, $credentials = array(), $sandbox = FALSE, $testMode = FALSE )
  {
    $this->serviceName = strtolower($service);

    $this->service = $this->getClass( ucfirst($service) . '_x0020_Service' );

    $this->sandbox = (bool) $sandbox;

    $this->testMode = (bool) $testMode;

    $this->setCredentials( $credentials );
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
      // if( count($args) === 1 && is_array($args[0]) ) $args = $args[0];

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
    $this->methodName = $method;

    if( $this->request )
    {
      // Set test mode if enabled
      if( $this->testMode && method_exists( $this->request, 'setTest') )
      {
        $this->request->setTest(TRUE);
      }

      if( $this->sandbox )
      {
        // Sandbox data
        $this->request->setSourceCredentials( $this->sandboxCredentials() );
      }
      else
      {
        // Live data
        $this->request->setSourceCredentials( $this->sourceCredentials );
      }      

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

      // Set method object
      $this->method = $this->getClass( $method, array($this->request) );      

      // Check for cached response 
      $response = $this->cache( $method, $args );

      // If not cached make the call
      if( empty($response) )
      {
        $response = $this->service->{$method}($this->method);
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
   * Get formatted result
   * @param string $method   Method called
   * @param object $response \Mindbody\Service\<servicetype>\MBObject
   */
  public function setResult( $method, $response )
  {
    if( empty($this->result) && ( ! empty($response) && ! empty($method) ) )
    {
      $resultClass = '\Mindbody\Result\\' . ucfirst($this->serviceName) . 'ServiceResult';

      if( class_exists($resultClass) ) 
      {
        $this->result = new $resultClass($method, $response);
      } 
      else
      {
        $this->result = new \Mindbody\Result( $method, $response );
      }
      
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
    echo '<pre>';
    var_dump($this->getData());
    echo '</pre>';
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
   * Get sandbox credentials
   * @see https://developers.mindbodyonline.com/PublicDocumentation/Testing?version=v5.1
   * @return \Mindbody\Service\<servicetype>\SourceCredentials
   */
  public function sandboxCredentials()
  {
    $sourceCredentials = $this->getClass('SourceCredentials');

    $sourceCredentials->setSourceName('Siteowner');
    $sourceCredentials->setPassword('apitest1234');
    $sourceCredentials->setSiteIDs( array('-99') );

    return $sourceCredentials;
  }

  /**
   * Generate an instance of a class used by this service
   * @param  string $class Class Name
   * @param  array  $args  Arguments to pass to class
   * @return mixed         Object instance if successful, FALSE if not
   */
  public function getClass( $class, $args = array() )
  {
    $className = '\\Mindbody\\Service\\' . ucfirst($this->serviceName) . 'Service\\' . ucfirst($class);

    if( class_exists($className) ) 
    {
      return new $className(...$args);
    }

    return FALSE;
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



  
}