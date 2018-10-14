<?php

namespace Mindbody\Service\ClientService;

class UpdateClientCrossRegionalResponse
{

    /**
     * @var UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     */
    protected $UpdateClientCrossRegionalResult = null;

    /**
     * @param UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     */
    public function __construct($UpdateClientCrossRegionalResult)
    {
      $this->UpdateClientCrossRegionalResult = $UpdateClientCrossRegionalResult;
    }

    /**
     * @return UpdateClientCrossRegionalResult
     */
    public function getUpdateClientCrossRegionalResult()
    {
      return $this->UpdateClientCrossRegionalResult;
    }

    /**
     * @param UpdateClientCrossRegionalResult $UpdateClientCrossRegionalResult
     * @return \Mindbody\Service\ClientService\UpdateClientCrossRegionalResponse
     */
    public function setUpdateClientCrossRegionalResult($UpdateClientCrossRegionalResult)
    {
      $this->UpdateClientCrossRegionalResult = $UpdateClientCrossRegionalResult;
      return $this;
    }

}
