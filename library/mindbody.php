<?php defined('ABSPATH') OR die('Unauthorized Access');

use \DevinCrossman\Mindbody\MB_API;
use \Mindbody\API;
use \Mindbody\Admin;
use \Mindbody\Service;


class Mindbody {

  /**
   * Credentials
   * @var string
   */
  private static $api_sourcename = 'ntheorydesign';
  private static $api_key        = 'H1gH/8sq1xWc7AVHDelATtXdKjM=';
  private static $api_siteID     = array('45374');


   /**
   * Holds errors
   * @var array
   */
  private static $errors = array();


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
    if( is_admin() ) Admin::init();
  }



  public static function service( $name )
  {
    $service = ucfirst($name) . 'Service';

    if( ! in_array($name, API::$services) )
    {
      return self::error('Invalid service name', $service);
    }

    $classname = '\\Mindbody\\Service\\' . $service;

    // Inject API into service
    return new $classname();

  }

  /**
   * Get the API object
   * @param  string $service (optional) set the service name
   * @return object          \Mindbody\API instance
   */
  public static function api( $service = NULL )
  {
    $api = new API( Mindbody::credentials(), $service );

    return $api;
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
    if( is_null($msg) ) return count($this->errors) ? $this->errors[0] : FALSE;

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
    $path = strtolower($class);

    $path = MBPRO_LIB . 'classes/' .  str_replace('\\','/',$path) . '.php';

    if( is_file($path) ) {
      require($path);
    } 
  }

  /**
   * Get API credentials
   * @return [type] [description]
   */
  public static function credentials()
  {
    return array(
      'SourceName' => Mindbody::$api_sourcename,
      'Password'   => Mindbody::$api_key,
      'SiteIDs'    => Mindbody::$api_siteID
    );
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



  public static function getClasses()
  {
    $service = Mindbody::service('class');

    if( $classes = $service->GetClasses() )
    {
      return $classes;
    }

    echo '<pre>';
    $last = $service->getApi()->getLastCallData();

    echo htmlentities($last['request']);
    echo '</pre>';

    return $service->error();

  }


  public static function getPrograms()
  {
    $service = Mindbody::service('Site');

    if( $programs = $service->getPrograms() )
    {
      return $programs;
    }

    return $service->error();
  }



}