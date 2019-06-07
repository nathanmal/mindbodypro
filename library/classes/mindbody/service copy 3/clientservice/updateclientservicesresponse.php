<?php

namespace Mindbody\Service\ClientService;

class UpdateClientServicesResponse
{

    /**
     * @var UpdateClientServicesResult $UpdateClientServicesResult
     */
    protected $UpdateClientServicesResult = null;

    /**
     * @param UpdateClientServicesResult $UpdateClientServicesResult
     */
    public function __construct($UpdateClientServicesResult)
    {
      $this->UpdateClientServicesResult = $UpdateClientServicesResult;
    }

    /**
     * @return UpdateClientServicesResult
     */
    public function getUpdateClientServicesResult()
    {
      return $this->UpdateClientServicesResult;
    }

    /**
     * @param UpdateClientServicesResult $UpdateClientServicesResult
     * @return \Mindbody\Service\ClientService\UpdateClientServicesResponse
     */
    public function setUpdateClientServicesResult($UpdateClientServicesResult)
    {
      $this->UpdateClientServicesResult = $UpdateClientServicesResult;
      return $this;
    }

}
