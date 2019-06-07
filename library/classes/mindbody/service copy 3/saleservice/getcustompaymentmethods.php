<?php

namespace Mindbody\Service\SaleService;

class GetCustomPaymentMethods
{

    /**
     * @var GetCustomPaymentMethodsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetCustomPaymentMethodsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCustomPaymentMethodsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCustomPaymentMethodsRequest $Request
     * @return \Mindbody\Service\SaleService\GetCustomPaymentMethods
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
