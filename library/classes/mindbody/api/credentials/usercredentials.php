<?php

namespace Mindbody\API\Credentials;

class UserCredentials
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfInt $SiteIDs
     */
    protected $SiteIDs = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * Constructor
     * @param array $credentials [description]
     */
    public function __construct( $credentials = array() )
    {
        if( isset($credentials['Username']) )
        {
            $this->setUsername[$credentials['Username']];
        }

        if( isset($credentials['Password']) )
        {
            $this->setPassword($credentials['Password']);
        }

        if( isset($credentials['SiteIDs']) )
        {   
            $ids = $credentials['SiteIDs'];

            $ids = is_array($ids) ? $ids : array($ids);

            $this->setSiteIDs( $ids );
        }
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Mindbody\Service\AppointmentService\UserCredentials
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Mindbody\Service\AppointmentService\UserCredentials
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSiteIDs()
    {
      return $this->SiteIDs;
    }

    /**
     * @param ArrayOfInt $SiteIDs
     * @return \Mindbody\Service\AppointmentService\UserCredentials
     */
    public function setSiteIDs($SiteIDs)
    {
      $this->SiteIDs = $SiteIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Mindbody\Service\AppointmentService\UserCredentials
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
