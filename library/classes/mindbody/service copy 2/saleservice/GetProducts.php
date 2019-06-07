<?php

namespace Mindbody\Service\SaleService;

class GetProducts
{

    /**
     * @var GetProductsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetProductsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetProductsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetProductsRequest $Request
     * @return \Mindbody\Service\SaleService\GetProducts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
