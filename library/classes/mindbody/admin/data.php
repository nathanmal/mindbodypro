<?php

namespace Mindbody\Admin;

use \Mindbody;
use \Mindbody\Admin\Page;
use \Mindbody\Cache;

class Data extends Page
{

  private $functions = array(
    'GetClients'     => 'Client',
    'GetClasses'     => 'Class',
    'GetEnrollments' => 'Class',
  );


  public function render_page_content()
  {

    echo '<table class="widefat">';

    echo '<thead>';
    echo '<tr>';
    echo '<th width="150">Function</th>';
    echo '<th>Output';
    echo '<input name="showrequest" type="checkbox" value="1">';
    echo '</th>';
    echo '</tr></thead>';


    echo '<tbody>';

    echo '<tr>';

    echo '<td>';

    foreach( $this->functions as $function => $service )
    {
      $url = admin_url('admin.php?page=data&show=' . $function );
      echo '<a href="'.$url.'">' . $service . ':' . $function .'</a><br/>';
    }

    echo '</td>';
    echo '<td>';

    $method = element($_GET, 'show', NULL);

    if( ! empty($method) && isset($this->functions[$method]) )
    {
      $serviceName = $this->functions[$method];

      $service = Mindbody::service($serviceName);

      

      $service->{$method}();

      pre($service->getRequest());

      pre($service->getResponse());
    }
    else
    {
      echo 'Select a function to test';
    }

    echo '</td>';
    echo '</tbody>';
    echo '</table>';



  }


}