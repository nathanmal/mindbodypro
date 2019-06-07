<?php

namespace Mindbody\Service\SaleService;

class GetCustomPaymentMethodsResponse
{

    /**
     * @var GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     */
    protected $GetCustomPaymentMethodsResult = null;

    /**
     * @param GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     */
    public function __construct($GetCustomPaymentMethodsResult)
    {
      $this->GetCustomPaymentMethodsResult = $GetCustomPaymentMethodsResult;
    }

    /**
     * @return GetCustomPaymentMethodsResult
     */
    public function getGetCustomPaymentMethodsResult()
    {
      return $this->GetCustomPaymentMethodsResult;
    }

    /**
     * @param GetCustomPaymentMethodsResult $GetCustomPaymentMethodsResult
     * @return \Mindbody\Service\SaleService\GetCustomPaymentMethodsResponse
     */
    public function setGetCustomPaymentMethodsResult($GetCustomPaymentMethodsResult)
    {
      $this->GetCustomPaymentMethodsResult = $GetCustomPaymentMethodsResult;
      return $this;
    }

}
