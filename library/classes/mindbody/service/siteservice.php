<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Service;

use \Mindbody\Service;

class SiteService extends Service
{

  public function getSites( $search = NULL, $relatedSiteID = NULL )
  {
    $args = array();

    if( ! empty($search) ) 
    {
      $args['SearchText'] = $search;
    }
  }


  public function getPrograms( $scheduleType = NULL, $onlineOnly = NULL )
  {
    $args = array();

    if( ! empty($scheduleType) )
    {
      $args['ScheduleType'] = $scheduleType;
    }

    if( is_bool($onlineOnly) )
    {
      $args['OnlineOnly'] = $onlineOnly;
    }

    if( $cache = $this->cache( 'GetPrograms', $args ) ) return $cache;


    if( $this->request('GetPrograms', $args) )
    { 
      return $this->data;

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