<?php defined('ABSPATH') OR die('Unauthorized Access');

use \Mindbody\Admin;
use \Mindbody\Service;
use \Mindbody\Shortcode;
use \Mindbody\Client;


final class Mindbody {

  /**
   * Credentials
   * @var string
   */
  private static $api_sourcename = 'ntheorydesign';
  private static $api_key        = 'H1gH/8sq1xWc7AVHDelATtXdKjM=';
  private static $api_siteID     = array('45374');


  /**
   * Holds singleton instances of services, 
   * @var array
   */
  private static $services = array();


   /**
   * Holds errors
   * @var array
   */
  private static $errors = array();


  /**
   * Whether to use sandbox mode
   * @var boolean
   */
  public static $sandbox = FALSE;


  /**
   * Whether to use test mode
   * @var boolean
   */
  public static $testMode = FALSE;


  /**
   * The API Object
   * @var [type]
   */
  private $api;


  /**
   * Initialize the plugin
   * @return [type] [description]
   */
  public static function init()
  {
    // Load shortcodes
    Shortcode::init();

    // Add the client role
    Client::addClientRole();

    // Enqueue assets
    Mindbody::enqueue();

    // Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

    // Initialize admin if we're on the dashboard
    if( is_admin() ) Admin::init();
  }

  /**
   * Enqueue plugin styles and scripts
   * @return [type] [description]
   */
  public static function enqueue()
  {
    wp_enqueue_script('mindbodypro', Mindbody::asset('dist/mindbodypro.js'), array('jquery-core'), '1.0', TRUE);
    // wp_enqueue_script('test', Mindbody::asset('dist/test.js'), array('jquery'), '1.0', TRUE);
    wp_enqueue_style('mindbodypro', Mindbody::asset('dist/mindbodypro.css'), array('bootstrap'));
  }

  /**
   * Get a plugin asset path
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public static function asset( $path )
  {
    return MBPRO_URI . 'assets/' . $path;
  }

  /**
   * Enable/disable sandbox mode
   * @param  [type] $use [description]
   * @return [type]      [description]
   */
  public static function useSandbox( $use )
  {
    Mindbody::$sandbox = (bool) $use;
  }

  /**
   * Enable/disable test mode
   * @param  [type] $test [description]
   * @return [type]       [description]
   */
  public static function useTestMode( $test )
  {
    Mindbody::$testMode = (bool) $test;
  }


  /**
   * Get an instance of a Mindbody Service
   * @param  string $name service name
   * @param  bool   $sandbox use sandbox data
   * @param  bool   $testMode use test mode with specific calls
   * @return object       The SoapClient service instance
   */
  public static function service( $name )
  { 
    if( isset(self::$services[$name]) ) return self::$services[$name];

    self::$services[$name] = new Service($name, Mindbody::credentials(), Mindbody::$sandbox, Mindbody::$testMode );

    return self::$services[$name];
  }


  /**
   * Error handling
   * @param  [type] $msg  [description]
   * @param  [type] $item [description]
   * @return [type]       [description]
   */
  public static function error( $msg = NULL, $item = NULL )
  {
    // If no params then we're trying to retrieve the first error
    if( is_null($msg) ) return count(self::$errors) ? self::$errors[0] : FALSE;

    // Set error and return false
    $err = $msg . ! is_null($item) ? '[' . $item . ']' : '';

    self::$errors[] = $err;

    return FALSE;
  }

  /**
   * Plugin autoloader
   * @param  [type] $class [description]
   * @return [type]        [description]
   */
  public static function autoload( $class )
  {
    $path = MBPRO_LIB . 'classes/' .  str_replace('\\','/', strtolower($class)) . '.php';

    if( is_file($path) ) require($path);

  }

  /**
   * Get API credentials
   * @return [type] [description]
   */
  public static function credentials()
  {
    $credentials = array();

    $credentials['SourceName'] = Mindbody::$api_sourcename;
    $credentials['Password']   = Mindbody::$api_key;
    $credentials['SiteIDs']    = Mindbody::$sandbox ? array(-99) : Mindbody::$api_siteID;

    return $credentials;
  }

  /**
   * Activation Hook
   * @return [type] [description]
   */
  public static function activate(){}

  /**
   * Deactivation Hook
   * @return [type] [description]
   */
  public static function deactivate(){}

  /**
   * Uninstallation Hook
   * @return [type] [description]
   */
  public static function uninstall(){}


  /**
   * Used to generate the service classes
   * @return [type] [description]
   */
  public static function generateServices()
  {
    \Mindbody\Generator::generate();
  }



}