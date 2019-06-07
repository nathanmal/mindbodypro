<?php

namespace Mindbody\Service\ClientService;

class UpdateClientServicesRequest extends MBRequest
{

    /**
     * @var ArrayOfClientService $ClientServices
     */
    protected $ClientServices = null;

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfClientService
     */
    public function getClientServices()
    {
      return $this->ClientServices;
    }

    /**
     * @param ArrayOfClientService $ClientServices
     * @return \Mindbody\Service\ClientService\UpdateClientServicesRequest
     */
    public function setClientServices($ClientServices)
    {
      $this->ClientServices = $ClientServices;
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
     * @return \Mindbody\Service\ClientService\UpdateClientServicesRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
