<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

use \Mindbody\Cache;
use \Mindbody\API;

class Service
{
  
  /**
   * Service Name
   * @var [type]
   */
  public $name;

  /**
   * Holds errors
   * @var array
   */
  public $errors = array();

  /**
   * API instance
   * @var [type]
   */
  protected $api;


  /**
   * Result data
   * @var [type]
   */
  protected $data;


  /**
   * Result Status
   * @var string
   */
  protected $resultStatus = '';

  /**
   * Result Code
   * @var [type]
   */
  protected $resultCode;

  /**
   * Result item count
   * @var [type]
   */
  protected $resultCount;

  /**
   * Service constructor
   * @param [type] $api [description]
   */
  public function __construct()
  {
    $this->api = new API( \Mindbody::credentials(), $this->name );
  }


  public function getApi()
  {
    return $this->api;
  }

  /**
   * Make an API request
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public function request( $method, $args )
  { 
    $this->data = $this->api->{$method}($args);

    if( $this->data === FALSE )
    {
      return $this->error( $this->api->getError() );
    }

    var_dump($this->data);

    $result = $method . 'Result';

    if( isset($this->data[$result]) )
    {
      if( isset($this->data[$result]['Status']) )
      {
        $this->resultStatus = (string) $this->data[$result]['Status'];
      }

      if( isset($this->data[$result]['ErrorCode']) )
      {
        $this->resultCode = (int) $this->data[$result]['ErrorCode'];
      }

      if( isset($this->data[$result]['ResultCount']) )
      {
        $this->resultCount = (int) $this->data[$result]['ResultCount'];
      }
    }

    return $this->success();
  }

  /**
   * Return true if API call was successful
   * @return [type] [description]
   */
  public function success()
  {
    return ( $this->resultStatus == 'Success' && $this->resultCode == 200 );
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



  
}