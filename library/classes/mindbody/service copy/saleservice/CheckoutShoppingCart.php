<?php

namespace Mindbody\Service\SaleService;

class CheckoutShoppingCart
{

    /**
     * @var CheckoutShoppingCartRequest $Request
     */
    protected $Request = null;

    /**
     * @param CheckoutShoppingCartRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return CheckoutShoppingCartRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param CheckoutShoppingCartRequest $Request
     * @return \Mindbody\Service\SaleService\CheckoutShoppingCart
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
