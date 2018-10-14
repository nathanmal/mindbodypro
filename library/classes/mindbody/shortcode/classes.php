<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Shortcode;

use \Mindbody;
use \DateTime;
use \Mindbody\Shortcode;


class Classes extends Shortcode
{ 

  private $default_view = 'classes/classlist';


  public function run( $args = array() )
  {
    $request = array();


    $days    = element( $args, 'days', NULL );
    $start   = element( $args, 'startdate', 'today');
    $end     = element( $args, 'enddate', NULL );
    $sortby  = element( $args, 'sortby', NULL );
    $sortdir = element( $args, 'sortdir', 'ASC' );
    $view    = element( $args, 'view', $this->default_view );


    $startdate = new DateTime($start);

    if( empty($end) ) 
    {
      $enddate = empty($days) ? new DateTime($start) : new DateTime( $start . ' + ' . $days . ' days');
    } 
    else
    {
      $enddate = new DateTime($end);
    }

    // Get the service
    $service = Mindbody::service('Class');

    // Set up query parameters
    $params = array();

    $params['StartDateTime'] = $startdate;
    $params['EndDateTime'] = $enddate;


    // Make the call
    $classes = $service->GetClasses( $params );

    if( $classes )
    {
      if( ! empty($sortby) ) $classes->sortBy($sortby, $sortdir);
  
      Shortcode::view( $view, array('classes'=>$classes->getData() ));
    }
    else 
    {
      $this->error('Error retrieving class data');
    }

  }
}