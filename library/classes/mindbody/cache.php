<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

class Cache
{

  /**
   * Prefix to use for transient keys
   * @var string
   */
  private static $cache_prefix  = 'mbpro-';
  
  /**
   * Whether or not caching is enabled
   * @var boolean
   */
  private static $cache_enabled = TRUE;
  
  /**
   * Default expiration time
   * @var integer
   */
  private static $cache_expire  = 3600;


  /**
   * Get a cached value
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public static function get( $method, $args = array() )
  {
    if( ! self::$cache_enabled ) return FALSE;

    $transient = self::transient($method, $args);

    return get_transient( $transient );

  }

  /**
   * Set a cached value
   * @param [type] $method [description]
   * @param array  $args   [description]
   * @param [type] $value  [description]
   * @param [type] $expire [description]
   */
  public static function set( $method, $args = array(), $value = NULL, $expire = NULL )
  {
    if( ! self::$cache_enabled ) return FALSE;

    $transient = self::transient($method, $args);

    $expire = ( ! is_null($expire) && is_int($expire) ) ? $expire : self::$cache_expire;

    return set_transient( $transient, $value, $expire );
  }

  /**
   * Delete a cached value
   * @param  [type] $method [description]
   * @param  array  $args   [description]
   * @return [type]         [description]
   */
  public static function delete( $method, $args = array() )
  {
    $transient = self::transient($method, $args);

    return delete_transient($transient);
  }

  /**
   * Generate a transient key based on method name and arguments
   * @param  [type] $method [description]
   * @param  [type] $args   [description]
   * @return [type]         [description]
   */
  public static function transient( $method, $args = array() )
  {
    $str = $method;

    if( ! empty($args) ) $str .= '-' . json_encode($args);

    $hash = md5($str);

    return self::$cache_prefix . $hash;
  }

  /**
   * Enable caching
   * @return [type] [description]
   */
  public static function enable()
  {
    self::$cache_enabled = TRUE;
  }

  /**
   * Disable caching
   * @return [type] [description]
   */
  public static function disable()
  {
    self::$cache_enabled = FALSE;
  }

}