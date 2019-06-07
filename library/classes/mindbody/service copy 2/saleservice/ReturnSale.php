<?php

namespace Mindbody\Service\SaleService;

class ReturnSale
{

    /**
     * @var ReturnSaleRequest $Request
     */
    protected $Request = null;

    /**
     * @param ReturnSaleRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ReturnSaleRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ReturnSaleRequest $Request
     * @return \Mindbody\Service\SaleService\ReturnSale
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
