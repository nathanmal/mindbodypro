<?php

namespace Mindbody\Shortcode;

use \Mindbody\Shortcode;
use \Mindbody\Client;

class Login extends Shortcode
{ 

  protected $errors = array();

  protected $redirect;

  protected $remember = FALSE;

  public function run( $args = array() )
  {
    global $wp;

    // Set action to current page
    $action = home_url($wp->request);
    // Create nonce
    $nonce  = wp_create_nonce('login');
    // Set redirect
    if( empty($this->redirect) )
    {
      $this->redirect = element( $args, 'redirect', site_url() );
    }


    if( isset($_POST['login']) && ! empty($_POST['login']) )
    {
      // Validate login credentials
      if( $this->process_login( $_POST['login'] ) )
      {
        
      }
    }


    $data = array(
      'redirect' => $this->redirect,
      'action'   => $action,
      'nonce'    => $nonce,
      'errors'   => $this->login_errors()
    );

    Shortcode::view( 'account/login', $data );
  }

  /**
   * Get any login errors
   * @return [type] [description]
   */
  public function login_errors()
  {
    return empty($this->errors) ? FALSE : $this->errors;
  }


  public function process_login( $input = array() )
  { 
    if( $input['submit'] == 'submit' )
    {
      $user = sanitize_user( element($input, 'username', FALSE) );
      $pass = element($input, 'password', FALSE);

      $this->remember = isset($input['rememberme']) ? TRUE : FALSE;
      $this->redirect = element($input, 'redirect', site_url());

      $nonce = element($input, 'nonce', FALSE);

      // Validation
      if( ! wp_verify_nonce( $nonce, 'login' ) )
      {
        wp_nonce_ays( 'login' );
        exit();
      }

      if( empty($user) )
      {
        $this->errors['username'] = __("Invalid username");
        return FALSE;
      }

      if( empty($pass) )
      {
        $this->errors['password'] = __("Invalid password");
        return FALSE;
      }

      $login = Client::validateLogin( $user, $pass );

      // Check that the login works on mindbody
      if( $login->success() )
      {
        // Mindbody login worked, now check to see if WP user exists
        // If not create one for this login
        return TRUE;
      }
      else
      {
        $this->errors[] = __( $login->getData()->getMessage() );

        return FALSE;
      }






    }


   

  }


}