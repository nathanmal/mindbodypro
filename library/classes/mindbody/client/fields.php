<?php

namespace Mindbody\Client;

use \Mindbody;
use \Mindbody\Client;


class Fields 
{

  public $ID = array(
    'label'   => 'ID',
    'type'    => 'string',
    'default' => NULL
  );

  public $NewID = array(
    'label'   => 'New ID',
    'type'    => 'int',
    'default' => NULL
  );

  public $UserName = array(
    'label'    => 'User Name',
    'required' => TRUE,
    'type'     => 'username'
  );





  /**
   * Form fields
   * @var array
   */
  protected $fields = array(

    'username' => array(
      'label'     => 'User Name',
      'required'  => TRUE,
      'autofocus' => TRUE,
    ),
    'email' => array(
      'label'    => 'Email',
      'required' => TRUE,
      'type'     => 'email'
    ),
    'password' => array(
      'label'     => 'Password',
      'required'  => TRUE,
      'type'      => 'password'
    ),
    'confirmpassword' => array(
      'label'     => 'Password',
      'required'  => TRUE,
      'type'      => 'password'
    ),

    'firstname' => array(
      'label'     => 'First Name',
      'required'  => TRUE,
    ),
    'lastname' => array(
      'label'     => 'Last Name',
      'required'  => TRUE,
    ),
    'addressline1' => array(
      'label'    => 'Address',
      'required' => TRUE,
    ),
    'addressline2' => array(
      'label'    => 'Address (Line 2)',
    ),
    'city' => array(
      'label'    => 'City',
      'required' => TRUE,
    ),
    'state' => array(
      'label'    => 'State',
      'required' => TRUE,
    ),
    'postalcode' => array(
      'label'    => 'Zipcode',
      'required' => TRUE,
    ),  

    'emergencycontactinfoname' => array(
      'label'     => 'Contact Name',
      'required'  => TRUE,
    ),
    'emergencycontactinfophone' => array(
      'label'     => 'Contact Phone',
      'required'  => TRUE,
    ),
    'emergencycontactinfoemail' => array(
      'label'    => 'Contact Email',
      'required' => TRUE,
      'type'     => 'email'
    ),
    'emergencycontactinforelationship' => array(
      'label'          => 'Relationship',
      'required'       => TRUE,
    ),
    
    'birthdate'      => array(
      'label'          => 'Birth Date',
      'type'           => 'date',
      'required'       => TRUE,
    ),
    
    'mobilephone'    => array(
      'label'          => 'Phone',
      'type'           => 'phone',
      'required'       => TRUE,
    ),
    
    'referredby'     => array(
      'label'          => 'Referred By', 
      'type'           => 'select',
      'options'        => array("Another Client","College","Community Event","Flyer","Google","Magazine","Online Search","Postcard","Print Advertisement","Radio","Yahoo")
    ),
    
    'liabilityrelease'      => array(
      'label'          => 'Liability Waiver',
      'type'           => 'checkbox',
      'required'       => TRUE,
    )
  );


}