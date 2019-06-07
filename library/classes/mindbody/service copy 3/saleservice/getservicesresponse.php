<?php

namespace Mindbody\Service\SaleService;

class GetServicesResponse
{

    /**
     * @var GetServicesResult $GetServicesResult
     */
    protected $GetServicesResult = null;

    /**
     * @param GetServicesResult $GetServicesResult
     */
    public function __construct($GetServicesResult)
    {
      $this->GetServicesResult = $GetServicesResult;
    }

    /**
     * @return GetServicesResult
     */
    public function getGetServicesResult()
    {
      return $this->GetServicesResult;
    }

    /**
     * @param GetServicesResult $GetServicesResult
     * @return \Mindbody\Service\SaleService\GetServicesResponse
     */
    public function setGetServicesResult($GetServicesResult)
    {
      $this->GetServicesResult = $GetServicesResult;
      return $this;
    }

}
