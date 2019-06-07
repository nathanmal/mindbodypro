<?php

namespace Mindbody\API\Service\SaleService;

class GetContractsResponse
{

    /**
     * @var GetContractsResult $GetContractsResult
     */
    protected $GetContractsResult = null;

    /**
     * @param GetContractsResult $GetContractsResult
     */
    public function __construct($GetContractsResult)
    {
      $this->GetContractsResult = $GetContractsResult;
    }

    /**
     * @return GetContractsResult
     */
    public function getGetContractsResult()
    {
      return $this->GetContractsResult;
    }

    /**
     * @param GetContractsResult $GetContractsResult
     * @return \Mindbody\Service\SaleService\GetContractsResponse
     */
    public function setGetContractsResult($GetContractsResult)
    {
      $this->GetContractsResult = $GetContractsResult;
      return $this;
    }

}
