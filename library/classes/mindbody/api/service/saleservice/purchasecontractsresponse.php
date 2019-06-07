<?php

namespace Mindbody\API\Service\SaleService;

class PurchaseContractsResponse
{

    /**
     * @var PurchaseContractsResult $PurchaseContractsResult
     */
    protected $PurchaseContractsResult = null;

    /**
     * @param PurchaseContractsResult $PurchaseContractsResult
     */
    public function __construct($PurchaseContractsResult)
    {
      $this->PurchaseContractsResult = $PurchaseContractsResult;
    }

    /**
     * @return PurchaseContractsResult
     */
    public function getPurchaseContractsResult()
    {
      return $this->PurchaseContractsResult;
    }

    /**
     * @param PurchaseContractsResult $PurchaseContractsResult
     * @return \Mindbody\Service\SaleService\PurchaseContractsResponse
     */
    public function setPurchaseContractsResult($PurchaseContractsResult)
    {
      $this->PurchaseContractsResult = $PurchaseContractsResult;
      return $this;
    }

}
