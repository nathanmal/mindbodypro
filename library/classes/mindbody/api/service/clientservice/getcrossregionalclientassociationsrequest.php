<?php

namespace Mindbody\API\Service\ClientService;

class GetCrossRegionalClientAssociationsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Mindbody\Service\ClientService\GetCrossRegionalClientAssociationsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Mindbody\Service\ClientService\GetCrossRegionalClientAssociationsRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}
