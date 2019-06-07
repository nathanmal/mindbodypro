<?php 

namespace Mindbody;

class API
{
  /**
   * The service SoapClient object
   * @var [type]
   */
  protected $service;

  /**
   * API credentials object
   * @var \Mindbody\API\Credentials\SourceCredentials
   */
  protected $sourceCredentials;

  /**
   * User credentials object
   * @var \Mindbody\API\Credentials\UserCredentials
   */
  protected $userCredentials;

  /**
   * Staff credentials object
   * @var \Mindbody\API\Credentials\StaffCredentials
   */
  protected $staffCredentials;


  public function __construct( string $service, array $credentials )
  { 
    // The service name
    $this->serviceName = ucfirst($service) . 'Service';

    $class = '\Mindbody\API\Service\\' . $this->serviceName . '\\' . ucfirst($service) . '_x0020_Service';

    $this->service = new $class;
  }


  public function loadClass( $class, $args )
  {
    $className = $this->service->className( $class );

    if( ! empty($className) && class_exists($className) )
    {
      return new $className($args);
    }
  }

  /**
   * Set the source credentials
   * @param array $credentials [description]
   */
  public function setSourceCredentials( array $credentials )
  {
    $this->sourceCredentials = new \Mindbody\API\Credentials\SourceCredentials($credentials);
  }

  /**
   * Set the user credentials
   * @param array $credentials [description]
   */
  public function setUserCredentials( array $credentials )
  {
    $this->userCredentials = new \Mindbody\API\Credentials\UserCredentials($credentials);
  }

  /**
   * Set the staff credentials
   * @param array $credentials [description]
   */
  public function setStaffCredentials( array $credentials )
  {
     $this->staffCredentials = new \Mindbody\API\Credentials\StaffCredentials($credentials);
  }


}