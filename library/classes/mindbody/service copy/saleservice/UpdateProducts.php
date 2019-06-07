<?php

namespace Mindbody\Service\SaleService;

class UpdateProducts
{

    /**
     * @var UpdateProductsRequest $Request
     */
    protected $Request = null;

    /**
     * @param UpdateProductsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateProductsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateProductsRequest $Request
     * @return \Mindbody\Service\SaleService\UpdateProducts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
