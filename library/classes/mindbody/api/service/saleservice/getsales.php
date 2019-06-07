<?php

namespace Mindbody\API\Service\SaleService;

class GetSales
{

    /**
     * @var GetSalesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetSalesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSalesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSalesRequest $Request
     * @return \Mindbody\Service\SaleService\GetSales
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
