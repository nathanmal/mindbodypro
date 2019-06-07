<?php

namespace Mindbody\API\Service\ClientService;

class UpdateClientCrossRegionalRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var Client $Client
     */
    protected $Client = null;

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Mindbody\Service\ClientService\UpdateClientCrossRegionalRequest
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Mindbody\Service\ClientService\UpdateClientCrossRegionalRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
