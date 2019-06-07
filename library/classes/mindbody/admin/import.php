<?php

namespace Mindbody\Admin;

use \Mindbody;
use \Mindbody\Admin\Page;
use \Mindbody\Cache;

class Import extends Page
{
  public $title = 'Import';

  public $menu_title = 'Import';
  
  public function render_page_content()
  {
    /*$services = array('Appointment','Class','Client','Sale','Site','Staff');

    $map = array();

    foreach($services as $service)
    {
      $class = '\Mindbody\API\Service\\' . $service . 'Service\\' . $service .'Service';
      $map = array_merge($map, $class::$classmap);
    }
    
    ksort($map);
    echo '<pre>$oldmap = ';
    var_export($map);
    echo '</pre>';*/

    $services = array('Appointment','Class','Client','Sale','Site','Staff');


    $a = array();

    $dir = MBPRO_LIB . 'classes/mindbody/api/service/';

    foreach($services as $service)
    {

      $sname = $service . 'Service';
      $sdir = $dir . strtolower($sname);
      $files = scandir($sdir);
      $a[$sname] = array();

      foreach($files as $file)
      {
        if( strpos($file, '.') === 0 OR $file == 'autoload.php' ) continue;

        $path = $sdir . '/' . $file;
        $cname = pathinfo($file, PATHINFO_FILENAME);

        $classname = '\Mindbody\API\Service\\' . $sname . '\\' . $cname;

        if( ! class_exists($classname, FALSE) )
        {
          include($path);
        }
        

        $reflect = new \ReflectionClass($classname);
        $short = $reflect->getShortName();


        $a[$sname][$short] = 'Mindbody\\API\\Service\\' . $sname . '\\' . $short;

      }


    }


    echo '<pre>$services = ';
    var_export($a);
    echo '</pre>';

   

    
  }


}