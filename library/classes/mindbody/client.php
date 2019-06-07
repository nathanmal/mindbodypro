<?php

namespace Mindbody;

use \Mindbody;
use \Mindbody\Service\ClientService\Client as MBClient;
use \Mindbody\Service\ClientService\ArrayofClient as MBClientList;
use \Mindbody\Service\ClientService\ActionCode;

final class Client 
{


  /**
   * Mindbody Client Object
   * @var \Mindbody\Service\ClientService\Client
   */
  protected $client;

  /**
   * Client ID as used on Mindbody Online
   * @var int
   */
  protected $client_id;

  /**
   * Wordpress User ID
   * @var int
   */
  protected $user_id;


  /**
   * Holds any client errors
   * @var array
   */
  protected $errors = array();


  /**
   * Holds result of Client::getFields
   * @var array
   */
  protected static $_fields = array();

  /**
   * Constructor
   */
  public function __construct( $user_id = NULL )
  {

    $user_id = intval($user_id);

    if( ! empty($user_id) ) 
    { 
      // Set IDs and client object
      $this->user_id   = $user_id;
      $this->client_id = Client::getUserClientID($this->user_id);
      $this->client    = Client::getUserClient($this->user_id);
    }
    else
    {
      // Prep with empty client object
      $this->client = new MBClient;
    }
  }


  /**
   * Update fields with array of data
   * @param  [type] $fields [description]
   * @return [type]         [description]
   */
  public function setFields( $fields = array() )
  {
    foreach( $fields as $name => $value )
    {
      $setMethod = 'set' . ucfirst($name);

      if( method_exists($this->client, $setMethod) )
      {
        $this->client->{$setMethod}($value);
      }
    }
  }

  /**
   * Register this client
   * @return [type] [description]
   */
  public function register( $fields = array() )
  {
    // Check for existing IDs
    if( ! empty($this->user_id) OR ! empty($this->client_id) )
    {
      $this->setError("Client already registered");
      return FALSE;
    }

    // Set fields
    if( ! empty($fields) ) 
    {
      $this->setFields( $fields );
    }

    // Check to see if username is already registered as a WP user
    $username = $this->client->getUserName();

    if( username_exists($username) )
    {
      $this->setError("Username already exists", 'username');
      return FALSE;
    }

    // Check to see if email is already registerd as a WP user
    $email = $this->client->getEmail();

    if( email_exists($email) )
    {
      $this->setError("Email already exists", 'email');

      return FALSE;
    }

    // Create a new client list
    $clients = new MBClientList;

    $clients->setClient( array( $this->client ) );

    $service = Mindbody::service('Client');

    $service->AddOrUpdateClients( array('Clients' => $clients) );

    // Response contains an MBClient object
    // get the first item
    $result = $service->getData('Clients.Client');

    if( empty($result) )
    {
      $this->setError('Error retrieving client data');
      return FALSE;
    } 

    $client = $result[0];

    $action = $client->getAction();

    if( $action == ActionCode::Added )
    {
      $username = $client->getUserName();
      $password = $client->getPassword();
      $email    = $client->getEmail();

      $user_id = wp_create_user( $username, $password, $email );

      if( is_wp_error( $user_id ) ) 
      { 
        $code = $user_id->get_error_code();

        $this->setError( $user_id->get_error_message($code), $code );

        return FALSE;
      }
      
      // Get user object
      $user = new \WP_User($user_id);
      
      // User created, assign Client role
      $user->set_role( 'mb_client' );

      $cliend_id = $client->getID();

      // 
      update_user_meta( $user_id, 'client_id', $client->getID() );

      // Return the user object
      return $user;
    } 
    elseif( $action == ActionCode::Failed )
    {
      foreach( $client->getMessages()->getString() as $message )
      {
        if( strpos($message, '-') ) 
        {
          $p = explode('-', $message);
          $field = strtolower(trim($p[0]));
          $message = __(trim($p[1]));
          $this->setError($message, $field);
        }
        else
        {
          $this->setError($message);
        }
      }

      return FALSE;
    }
  }


  /**
   * Set a client error
   * @param [type] $message [description]
   * @param [type] $key     [description]
   */
  public function setError( $message, $key = NULL )
  {
    if( ! empty($key) ) 
    {
      $this->errors[$key] = $message;
    }
    else
    {
      $this->errors[] = $message;
    }
  }

  public function errors()
  {
    return $this->errors;
  }


  /**
   * Adds the client role
   */
  public static function addClientRole()
  {
    add_role(
      'mb_client',
      __( 'Client' ),
      array(
        'read' => TRUE
      )
    );
  }



  





  

  /**
   * Links a WP User to an MBO client account
   * @param  [type] $user_id   [description]
   * @param  [type] $client_id [description]
   * @return [type]            [description]
   */
  public static function linkUser( $user_id, $client, $force_update = FALSE )
  {
    
  }



  public static function create_user( $client )
  {
    $username = $client->getUserName();
  }


  /**
   * Set a user's MBO client ID
   * @param  [type] $user_id [description]
   * @return [type]          [description]
   */
  public static function getUserClientID( $user_id )
  {
    return get_user_meta( $user_id, 'client_id', TRUE );
  }


  public static function setUserClientID( $user_id, $client_id )
  {
    $current = Client::getUserClientID( $user_id );

    if( ! empty($current) ) 
    {
      return FALSE;
    }

    return update_user_meta( $user_id, 'client_id', $client_id );
  }

  /**
   * Get a users's MBClient object by WP user ID
   * @param  [type] $user_id [description]
   * @return [type]          [description]
   */
  public static function getUserClient( $user_id )
  {
    // Return the serialized MBClient object
    return get_user_meta( $user_id, 'client', TRUE );
  }


  public static function updateUserClient( $user_id, $data = array() )
  {
    $client = Client::getUserClient( $user_id );

    $fields = Client::getFields();

    foreach( $fields as $name => $type )
    {
      $lcname = strtolower($name);

      $value = isset($data[$name]) ? $data[$name] : ( isset($data[$lcname]) ? $data[$lcname] : NULL );

      if( ! is_null($value) ) 
      {
        $setMethod = 'set' . ucfirst($name);

        $client->{$setMethod}($value);
      }
    }
  }


  public static function sanitize( $field, $value = NULL )
  { 
    $fields = Client::getFields();

    if( ! isset($fields[$field]) ) wp_die("$field is not a Client field");

    $type = $fields[$field];

    switch($type)
    {
      case "\Mindbody\Service\ClientService\ArrayOfClientRelationship":
      case "\Mindbody\Service\ClientService\ArrayOfRep":
      case "\Mindbody\Service\ClientService\ArrayOfSalesRep":
      case "\Mindbody\Service\ClientService\ArrayOfCustomClientField":
        break;

      case "\Mindbody\Service\ClientService\ArrayOfString":
        break;

      case "\Mindbody\Service\ClientService\Liability":
      case "\Mindbody\Service\ClientService\ProspectStage":
      case "\Mindbody\Service\ClientService\ActionCode":
      case "\Mindbody\Service\ClientService\Location":
      case "\Mindbody\Service\ClientService\Site":
        break;

      case '\\DateTime':
        $value = DateTime::createFromFormat('d/m/Y', $value);
        break;
      case 'float':
        $value = floatval($value);
        break;
      case 'int':
        $value = intval($value);
        break;
      case 'boolean': 
        $value = (bool) $value;
        break;
      case 'string':
      default: 
        break;
    }

    return $value;
  }


  /**
   * Get client fields and their type definitions
   * @param  array  $values [description]
   * @return [type]         [description]
   */
  public static function getFields( $values = array() )
  { 
    if( ! empty(Client::$_fields) ) return Client::$_fields;

    $ref = new \ReflectionClass('Mindbody\Service\ClientService\Client');

    $props = $ref->getProperties();

    $fields = array();

    foreach($props as $prop)
    { 
      // Property name
      $name = $prop->getName();

      // Get property type
      preg_match( '/@var ([^\s]+) \$/', $prop->getDocComment(), $matches);

      // By default just set to string
      $type = isset($matches[1]) ? trim($matches[1]) : 'string';

      // It a class object
      if( ctype_upper($type[0]) ) {
        $type = '\Mindbody\Service\ClientService\\' . $type;
      }

      $fields[$name] = $type;
    }

    Client::$_fields = $fields;
    
    return $fields;

  }

  /**
   * Update an existing client
   * @param  [type] $id     [description]
   * @param  [type] $fields [description]
   * @return [type]         [description]
   */
  public static function update( $id, $fields )
  {



  }

  public static function getReferralTypes()
  {
    $service = Mindbody::service('Client');

    $service->GetClientReferralTypes();

    $service->printData();
  }


  public static function update_client( $id, $fields )
  {

  }

  /**
   * Validate a user's MBO login
   * @param  [type] $username [description]
   * @param  [type] $password [description]
   * @return [type]           [description]
   */
  public static function validateLogin( $username, $password )
  {
    $service = Mindbody::service('Client');

    $args = array(
      'username' => $username,
      'password' => $password
    );

    return $service->ValidateLogin( $args );

  }
  
}


