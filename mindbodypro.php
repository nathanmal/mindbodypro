<?php
/*
Plugin Name: Mindbody Pro
Description: Mindbody Integration for Wordpress
Author: Nathan Malachowski
Author URI: http://ntheorydesign.com/
Version: 0.1
Text Domain: mbpro
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

// Prevent Direct Access
defined('ABSPATH') OR die('Unauthorized Access');

/************************
** Plugin Constants
*************************/

// Plugin Version
define('MBPRO_VERSION', '0.0.1' );

// Plugin text domain
define('MBPRO_DOMAIN', 'mindbodypro');

// Path to plugin
define('MBPRO_DIR', plugin_dir_path(__FILE__));

// Path to library
define('MBPRO_LIB', MBPRO_DIR . 'library/');

// Import helper functions
require( MBPRO_LIB . 'helpers.php');

// Import main plugin class
require( MBPRO_LIB . 'mindbody.php' );

// Set up autoloader
spl_autoload_register( '\Mindbody::autoload' );

// Composer autoload
require( MBPRO_LIB . 'vendor/autoload.php' );

// Activation hook, fired when user clicks 'Activate' on plugin
register_activation_hook( __FILE__, array('\Mindbody','activate') );

// Deactivation hook, fired when user clicks 'Deactivate' on plugin
register_deactivation_hook( __FILE__, array('\Mindbody','deactivate') );

// Uninstall hook, fired when user clicks 'Delete' on plugin
register_uninstall_hook( __FILE__,array('\Mindbody','uninstall') );

// Initialize
add_action( 'init', array( '\\Mindbody', 'init'), 0 );