<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

class Shortcode
{ 

  /**
   * Available shortcodes
   * @var array
   */
  private static $shortcodes = array(
    'classes',
    'login',
    'register'
  );

  /**
   * Holds shortcode instances
   * @var array
   */
  private static $instances = array();

  /**
   * Directories to find views
   * @var array
   */
  private static $viewDirs = array(
    MBPRO_LIB . 'views/shortcode/'
  );

  /**
   * Global shortcode prefix
   * @var string
   */
  private static $prefix = 'mbp_';


  /**
   * Shortcode name
   * @var string
   */
  protected $shortcode;


  /**
   * Initialize shortcodes
   * @return [type] [description]
   */
  public static function init()
  {
    foreach( Shortcode::$shortcodes as $shortcode )
    {
      $class = '\Mindbody\Shortcode\\' . ucfirst($shortcode);

      Shortcode::$instances[$shortcode] = new $class();
    }
  }

  /**
   * Locate a view file
   * @param  [type] $view [description]
   * @return [type]       [description]
   */
  public static function findView( $view )
  {

    // Add php extension if not present
    if( pathinfo($view, PATHINFO_EXTENSION) !== 'php' ) $view .= '.php';

    foreach( Shortcode::$viewDirs as $dir )
    {
      $path = $dir . '/' . $view;

      if( is_file($path) ) return $path;
    }

    return FALSE;
  }

  /**
   * Load a view
   * @param  string  $path   path to view file
   * @param  array   $data   data to extract to view
   * @param  boolean $return whether to return or echo content
   * @return mixed           
   */
  public static function view( $view, $data = array(), $return = FALSE )
  {
    
    $path = Shortcode::findView($view);

    if( $path )
    {
      // Turn on buffering
      ob_start();

      // Extract data variables for include file
      extract($data, EXTR_SKIP);

      // Include the file
      include($path);

      // Get contents
      $content = ob_get_clean();

      // Return if specified
      if( $return ) return $content;

      // Otherwise echo contents
      echo $content;
    }
    else
    {
      // Ruh oh...
      $this->error('Could not locate view', $view);
    }

  }

  /**
   * Class constructor
   *
   * Will create shortcode name based on class if not present
   */
  public function __construct()
  {
    if( empty($this->shortcode) ) {
      $classname = strtolower((new \ReflectionClass($this))->getShortName());
      $this->shortcode = Shortcode::$prefix . $classname;
    }

    $this->register();
  }

  /**
   * Register the shortcode
   * @return [type] [description]
   */
  public function register()
  {
    add_shortcode( $this->shortcode, array( $this, 'run' ) );
  }

  /**
   * Runs the shortcode
   * @return [type] [description]
   */
  public function run(){}



  public function error( $message, $item = NULL)
  {
    echo '<span class="shortcode-error">';
    echo __( $message );
    if( ! is_null($item) ) echo ' [' . (string) $item . ']';
    echo '</span>';
  }

}