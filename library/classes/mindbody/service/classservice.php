<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Service;

use \Mindbody\Service;
use \Mindbody\Result\ClassResult;

class ClassService extends Service
{ 

  public $name = 'class';

  public function getClasses( $start = NULL, $end = NULL, $args = array() )
  {
    $args['StartDateTime'] = empty($start) ? date('Y-m-d') : date('Y-m-d', $start);
    $args['EndDateTime']   = empty($end) ? date('Y-m-d') : date('Y-m-d', $end);

    if( $cache = $this->cache('GetClasses', $args) )
    {
      return $cache;
    }

    if( $this->request('GetClasses', $args) )
    { 
      $classes = array();

      foreach($this->data['GetClassesResult']['Classes']['Class'] as $class)
      {
        $classes[] = new ClassResult($class);
      }

      // Set cache
      $this->cache('GetClasses', $args, $classes);  

      return $classes;
    }

    return FALSE;
  }

}