<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Admin;

use Mindbody\Admin\Page;

class Import extends Page
{
  public $title = 'Import';

  public $menu_title = 'Import';
  

  public function render_page_content()
  {
    // \Mindbody\Cache::disable();

    $classes = \Mindbody::getClasses();
    
    echo '<pre>';
    var_dump($classes);
    echo '</pre>';
  }


}