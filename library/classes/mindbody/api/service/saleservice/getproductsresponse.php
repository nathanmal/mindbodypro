<?php

namespace Mindbody\API\Service\SaleService;

class GetProductsResponse
{

    /**
     * @var GetProductsResult $GetProductsResult
     */
    protected $GetProductsResult = null;

    /**
     * @param GetProductsResult $GetProductsResult
     */
    public function __construct($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
    }

    /**
     * @return GetProductsResult
     */
    public function getGetProductsResult()
    {
      return $this->GetProductsResult;
    }

    /**
     * @param GetProductsResult $GetProductsResult
     * @return \Mindbody\Service\SaleService\GetProductsResponse
     */
    public function setGetProductsResult($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
      return $this;
    }

}
