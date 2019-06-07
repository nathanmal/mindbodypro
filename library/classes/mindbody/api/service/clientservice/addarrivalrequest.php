<?php

namespace Mindbody\API\Service\ClientService;

class AddArrivalRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @param int $LocationID
     */
    public function __construct($LocationID)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
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
     * @return \Mindbody\Service\ClientService\AddArrivalRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Mindbody\Service\ClientService\AddArrivalRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
