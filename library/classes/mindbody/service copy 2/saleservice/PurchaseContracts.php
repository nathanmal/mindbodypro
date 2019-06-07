<?php

namespace Mindbody\Service\SaleService;

class PurchaseContracts
{

    /**
     * @var PurchaseContractsRequest $Request
     */
    protected $Request = null;

    /**
     * @param PurchaseContractsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return PurchaseContractsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param PurchaseContractsRequest $Request
     * @return \Mindbody\Service\SaleService\PurchaseContracts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
