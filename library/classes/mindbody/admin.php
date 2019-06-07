<?php

namespace Mindbody;

class Admin
{

  public static $pages = array(
    'settings','import','data'
  );

  /**
   * Array of instantiated page objects
   * @var array
   */
  private static $_pages = array();



  private static $debugs = array();

  // initialize admin functions/menu
  public static function init()
  {
    // Admin class
    $admin = '\\Mindbody\\Admin';

    // Adds settings menu
    add_action( 'admin_menu', array( $admin, 'create_menus' ), 10 );

    add_action( 'admin_notices', array( $admin, 'notices' ), 999 );
  }

  /**
   * Create plugin Admin menu and submenus
   * @return [type] [description]
   */
  public static function create_menus()
  {
    // Main menu item
    add_menu_page (
      'Mindbody Pro',
      'Mindbody Pro',
      'manage_options',
      'settings',
      '', 
      NULL, // Icon
      '76'
    );

    foreach( self::$pages as $slug )
    {
      $class = '\\Mindbody\\Admin\\' . ucfirst($slug);

      self::$_pages[$slug] = new $class();
    }
  }


  public static function debug( $var, $key = NULL )
  { 
    if( ! is_null($key) ) {
      Admin::$debugs[$key] = pre($var, TRUE);
    } else {
      Admin::$debugs[] = pre($var, TRUE);
    }
    
  }


  public static function notices()
  {
    if( ! empty(Admin::$debugs) ) {
      foreach(Admin::$debugs as $debug){
        echo $debug;
      }
    }
  }
}