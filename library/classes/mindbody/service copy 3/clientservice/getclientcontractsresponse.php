<?php

namespace Mindbody\Service\ClientService;

class GetClientContractsResponse
{

    /**
     * @var GetClientContractsResult $GetClientContractsResult
     */
    protected $GetClientContractsResult = null;

    /**
     * @param GetClientContractsResult $GetClientContractsResult
     */
    public function __construct($GetClientContractsResult)
    {
      $this->GetClientContractsResult = $GetClientContractsResult;
    }

    /**
     * @return GetClientContractsResult
     */
    public function getGetClientContractsResult()
    {
      return $this->GetClientContractsResult;
    }

    /**
     * @param GetClientContractsResult $GetClientContractsResult
     * @return \Mindbody\Service\ClientService\GetClientContractsResponse
     */
    public function setGetClientContractsResult($GetClientContractsResult)
    {
      $this->GetClientContractsResult = $GetClientContractsResult;
      return $this;
    }

}
