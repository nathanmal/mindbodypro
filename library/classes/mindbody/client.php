<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

use \Mindbody;

final class Client 
{

  /**
   * Adds the client role
   */
  public static function add_client_role()
  {
    add_role(
      'mbp_client',
      __( 'Client' ),
      array(
        'read' => TRUE
      )
    );
  }

  /**
   * Set a user's MBO client ID
   * @param  [type] $user_id [description]
   * @return [type]          [description]
   */
  public static function get_client_id( $user_id )
  {
    return get_user_meta( $user_id, 'client_id', TRUE );
  }

  /**
   * Validate a user's MBO login
   * @param  [type] $username [description]
   * @param  [type] $password [description]
   * @return [type]           [description]
   */
  public static function validate_login( $username, $password )
  {
    $service = Mindbody::service('Client');

    $args = array(
      'username' => $username,
      'password' => $password
    );

    return $service->ValidateLogin( $args );

  }
  
}


