<?php

namespace Mindbody\Shortcode;

use \Mindbody\Shortcode;
use \Mindbody\Client;
use \Mindbody\Service\ClientService\ActionCode;

class Register extends Shortcode
{ 
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
      'label'     => 'Confirm Password',
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
      'format'         => 'Y-m-d',
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

  /**
   * Form sections
   * @var array
   */
  protected $sections = array(
    'account' => array(
      'label' => 'Account Details',
      'fields' => array(
        'username',
        'email',
        'password',
        'confirmpassword'
      )
    ),

    'personal' => array(
      'label' => 'Personal Details',
      'fields' => array(
        'firstname',
        'lastname',
        'addressline1',
        'addressline2',
        'city',
        'state',
        'postalcode',
        'birthdate',
        'referredby',
        'mobilephone'
      )
    ),

    'emergencycontact' => array(
      'label' => 'Emergency Contact',
      'fields' => array(
        'emergencycontactinfoname',
        'emergencycontactinfoemail',
        'emergencycontactinfophone',
        'emergencycontactinforelationship'
      )
    )

  );

  /**
   * Holds input values
   * @var array
   */
  protected $input = array();


  /**
   * Holds validation errors
   * @var array
   */
  protected $errors = array();

  /**
   * Sanitize user input
   * @param  string $name  name of the field
   * @param  mixed  $value value submitted
   * @return mixed         sanitized value
   */
  public function sanitize( $name, $value )
  {
    $field = $this->fields[$name];

    $value = trim($value);

    $type  = element( $field, 'type', 'text' );

    if( $name == 'username' )
    {
      $type = 'username';
    }

    switch( $type )
    {
      case 'date':
        $value = \DateTime::createFromFormat('Y-m-d', $value);
        break;
      case 'username':
        $value = sanitize_user($value);
        break;
      case 'email':
        $value = sanitize_email($value);
        break;
      case 'checkbox':
        $value = (bool) $value;
        break;
      case 'text':
      default:
        $value = sanitize_text_field($value);
        break;
    }

    return $value;
  }


  /**
   * Run the shortcode
   * @param  array  $args [description]
   * @return [type]       [description]
   */
  public function run( $args = array() )
  { 
    // Dont allow logged in users to register
    if( is_user_logged_in() )
    {
      // do_redirect( 'account' );
    }

    // Process form if submitted
    if( isset($_POST['register']) && $this->validate($_POST['register']) )
    {
      $client = new Client();

      if( $user = $client->register( $this->input ) )
      { 

        // Redirect to account page
      }
    
      // Get client registration errors
      $this->errors = array_merge( $this->errors, $client->errors() );
      

    }     

    $data = array(
      'shortcode' => $this,
      'action'    => current_url(),
      'nonce'     => wp_create_nonce('register'),
      'errors'    => $this->errors
    );

    $data = array_merge($data, $this->input);

    $this->view('account/register', $data);

  }



  /**
   * Validate the information submitted
   *
   * This also populates the $this->input array with sanitized values
   * 
   * @param  [type] $input [description]
   * @return [type]        [description]
   */
  protected function validate( $input )
  {
    // pre($input);

    if( ! wp_verify_nonce($input['nonce'], 'register') )
    {
      wp_nonce_ays( 'register' );
      exit();
    }

    // Validate fields
    foreach( $this->fields as $name => $field )
    {
      $type     = element( $field, 'type', 'text' );
      $required = element( $field, 'required', FALSE);
      $label    = element( $field, 'label', ucfirst( $name ) );
      
      // Sanitize 
      $value    = element( $input, $name, NULL );
      $value    = $this->sanitize( $name, $value );

      // Set to sanitized value
      $this->input[$name] = $value;

      if( $required && empty($value) )
      {
        $this->errors[$name] = __($label) . ' ' . __("is required");
      }

      if( $type == 'email' )
      {
        if( ! is_email($value) )
        {
          $this->errors[$name] = __($label) . ' ' . __("must be a valid email");
        }
      }
    }


    if( $input['password'] != $input['confirmpassword'] )
    {
      $this->errors['confirmpassword'] = __('Passwords must match');
    } 

    return empty($this->errors);

  }

  /**
   * Render a registration form section
   * @param  [type] $name [description]
   * @return [type]       [description]
   */
  public function render_section( $name )
  {
    $section = $this->sections[$name];

    echo '<div class="form-section">';

    echo '<h3>' . __( $section['label'] ) . '</h3>';

    foreach( $section['fields'] as $fieldname)
    {
      $this->render_input( $fieldname );
    }

    echo '<hr class="my-4">';

  }

  /**
   * Render a registration form input
   * @param  [type] $name [description]
   * @return [type]       [description]
   */
  public function render_input( $name )
  {
    if( isset($this->fields[$name]) )
    {
      $field = $this->fields[$name];

      $ucname    = ucfirst($name);
      $type      = element($field, 'type', 'text');
      $label     = element($field, 'label', ucfirst($name));
      $value     = element($this->input, $name, NULL);
      $required  = element($field, 'required', FALSE) ? 'required' : '';
      $autofocus = element($field, 'autofocus', FALSE) ? 'autofocus' : '';
      $error     = element($this->errors, $name, FALSE) ? 'error' : '';
      $asterisk  = $required ? '*' : '';

      switch($type)
      { 
        case 'select':
          $options = element($field, 'options', array());
          ?>
          <div class="form-group <?=$required?> <?=$error?>">
            <label for="register<?=$ucname?>"><?= __($label) ?><?=$asterisk?></label>
            <select name="register[<?=$name?>]" id="register<?=$ucname?>" class="form-control">
              <?php 
              foreach($options as $val => $option){
                echo '<option value="' .$val.'">'.$option.'</option>';
              }
              ?>
            </select>
            
          </div>
          <?php 
          break;
        case 'date':
          $value = empty($value) ? '' : $value->format('Y-m-d');
          ?>
          <div class="form-label-group <?=$required?> <?=$error?>">
            <input type="<?=$type?>" name="register[<?=$name?>]" id="register<?=$ucname?>" class="form-control" placeholder="<?= __($label) ?>" value="<?=$value?>" <?=$required?> <?=$autofocus?>>
            <label for="register<?=$ucname?>"><?= __($label) ?><?=$asterisk?></label>
          </div>

          <?php
          break;
        case 'email':
        case 'password':
        case 'text':
        default:
          ?>
          <div class="form-label-group <?=$required?> <?=$error?>">
            <input type="<?=$type?>" name="register[<?=$name?>]" id="register<?=$ucname?>" class="form-control" placeholder="<?= __($label) ?>" value="<?=$value?>" <?=$required?> <?=$autofocus?>>
            <label for="register<?=$ucname?>"><?= __($label) ?><?=$asterisk?></label>
          </div>

          <?php 
          break;
      }
    }


  }
}



