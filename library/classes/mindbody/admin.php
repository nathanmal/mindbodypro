<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

class Admin
{

  public static $pages = array(
    'settings','import'
  );

  /**
   * Array of instantiated page objects
   * @var array
   */
  private static $_pages = array();

  // initialize admin functions/menu
  public static function init()
  {
    // Admin class
    $admin = '\\Mindbody\\Admin';

    // Adds settings menu
    add_action( 'admin_menu', array($admin, 'create_menus'), 10 );
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

      self::$_pages[$slug] = new $class($slug);
    }
  }
}