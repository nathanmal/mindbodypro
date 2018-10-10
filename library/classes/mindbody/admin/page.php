<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Admin;

use \Mindbody\Admin;

/**
 * Represents a page of the admin
 */
abstract class Page
{
  /**
   * Parent menu item
   * @var string
   */
  public $parent = 'settings';


  /**
   * Capability needed to view/use this page
   * @var string
   */
  public $cap = 'manage_options';

  /**
   * Menu Slug
   * Should be unique to the full menu heirarchy
   * @var string
   */
  public $slug = '';

  /**
   * Page title
   * @var string
   */
  public $title = '';

  /**
   * Title for menu
   * @var string
   */
  public $menu_title = '';

  /**
   * Display Post type list/editor
   * If set, will ignore the render function and edit this post type instead
   * @var string
   */
  public $post_type = '';

  /**
   * An array of tabs to use, if using a tabbed interface
   * array('tab1','tab2'=>'Tab Two')
   * @var array
   */
  public $tabs = array();


  /**
   * Admin page constructor
   * @return [type] [description]
   */
  public function __construct( $slug )
  {   
      $this->slug = $slug;

      if( empty($this->title) ) $this->title = ucfirst($this->slug);

      if( empty($this->menu_title) ) $this->menu_title = $this->title;

      $this->add_submenu();

      // Ensure associative array
      $tabs = array();

      foreach( $this->tabs as $tab => $label )
      {
        if( is_int($tab) ) {
          $tab = $label;
          $label = ucfirst(str_replace('_',' ',$label));
        }

        $tabs[$tab] = $label;
      }

      $this->tabs = $tabs;

  }


  public function active_tab()
  {
    return ! empty(Admin::$tab) ? Admin::$tab : key($this->tabs);
  }


  /**
   * Render the page
   * @return [type] [description]
   */
  public function render()
  {
    echo '<div class="wrap">';
    echo '<h2>' . __('Mindbody Pro', MBPRO_DOMAIN) . ' : ' . __($this->title, MBPRO_DOMAIN) . '</h2>';
    echo '<hr/>';
    // Render tabbed navigation, if used
    $this->render_tabs();
    // Render page content
    $this->render_content();

    echo '</div>';
  }

  /**
   * Render tab navigation
   * @return [type] [description]
   */
  public function render_tabs()
  {
     if( empty($this->tabs) ) return;

     echo '<h2 class="nav-tab-wrapper">';

     foreach( $this->tabs as $tab => $label )
     {
        if( is_int($tab) ) {
          $tab = $label;
          $label = ucfirst(str_replace('_',' ',$tab));
        }

        $url = admin_url( 'admin.php?page=' . Admin::$page . '&tab=' . $tab );

        $tc = 'nav-tab' . ( $tab === $this->active_tab() ? ' nav-tab-active' : '' );

        echo '<a href="'.$url.'" class="'.$tc.'">' . $label . '</a>';
     }

     echo '</h2>';
  }

  /**
   * Render the main settings page content
   * If using tabs render the active tab content function
   * @return [type] [description]
   */
  public function render_content() 
  {

    echo '<div class="mbpro-page-content">';

    if( ! empty($this->tabs) ) 
    {
      $active = $this->active_tab();

      $this->render_tab_content( $active );
    }
    else
    {
      $this->render_page_content();
    }

    echo '</div>';


  }

  public function render_tab_content( $tab ) {

    if( empty($tab) ) return;

    $method = 'render_tab_content_' . $tab;

    echo '<div class="tab-content tab-content-'.$tab.'">';

    if( method_exists($this, $method) ) {
      $this->{$method}();
    }
    else
    {
      echo '<p>No tab method found!</p>';
    }

    echo '</div>';

  }


  public function render_page_content()
  {
    echo 'Render page content here';
  }

  /**
   * Add this to the main submenu
   * @see https://developer.wordpress.org/reference/functions/add_submenu_page/
   */
  public function add_submenu()
  {
    // Either editing post type or custom render function
    if( empty($this->post_type) )
    {
      $slug = $this->slug;
      $func = array($this, 'render');
    }
    else
    {
      $slug = 'edit.php?post_type=' . $this->post_type;
      $func = NULL;
    }

    // Add to admin menu
    add_submenu_page(
      // Slug of parent admin menu
      $this->parent, 
      // Page title
      __(ucfirst($this->title), MBPRO_DOMAIN),
      // Menu title
      __(ucfirst($this->menu_title), MBPRO_DOMAIN),
      // Capability
      $this->cap,
      // Menu slug
      $slug,
      // Render page output
      $func
    );
  }

}