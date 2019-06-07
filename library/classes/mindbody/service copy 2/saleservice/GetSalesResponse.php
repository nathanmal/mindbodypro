<?php

namespace Mindbody\Service\SaleService;

class GetSalesResponse
{

    /**
     * @var GetSalesResult $GetSalesResult
     */
    protected $GetSalesResult = null;

    /**
     * @param GetSalesResult $GetSalesResult
     */
    public function __construct($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
    }

    /**
     * @return GetSalesResult
     */
    public function getGetSalesResult()
    {
      return $this->GetSalesResult;
    }

    /**
     * @param GetSalesResult $GetSalesResult
     * @return \Mindbody\Service\SaleService\GetSalesResponse
     */
    public function setGetSalesResult($GetSalesResult)
    {
      $this->GetSalesResult = $GetSalesResult;
      return $this;
    }

}
