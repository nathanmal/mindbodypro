<?php

namespace Mindbody\API\V6;


class Service
{

  private $_services = array(
    'appointment',
    'class',
    'client',
    'enrollment',
    'sale',
    'site',
    'staff'
  );

  private $service = '';

  public function __construct( $service )
  {

  }



  public function __call( $method )
  {
    
  }




}