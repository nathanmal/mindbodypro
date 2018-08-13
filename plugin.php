<?php
/*
Plugin Name: WP-Pluing (Rename This)
Description: Plugin Description
Author: Nathan Malachowski
Author URI: http://ntheorydesign.com/
Version: 0.1
Text Domain: wp-plugin
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

// Prevent Direct Access
defined('ABSPATH') OR die('Unauthorized Access');


/************************
** Plugin Constants
*************************/

// Plugin Version
define('WP_PLUGIN_VERSION', '0.0.1' );

// Path to plugin
define('WP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Composer autoload file
define('WP_PLUGIN_COMPOSER_AUTOLOAD', WP_PLUGIN_DIR . 'library/vendor/autoload.php');


/************************
** Composer Autoload
*************************/

is_file(WP_PLUGIN_COMPOSER_AUTOLOAD) && require( WP_PLUGIN_COMPOSER_AUTOLOAD );