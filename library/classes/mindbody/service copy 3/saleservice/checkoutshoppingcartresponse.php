<?php

namespace Mindbody\Service\SaleService;

class CheckoutShoppingCartResponse
{

    /**
     * @var CheckoutShoppingCartResult $CheckoutShoppingCartResult
     */
    protected $CheckoutShoppingCartResult = null;

    /**
     * @param CheckoutShoppingCartResult $CheckoutShoppingCartResult
     */
    public function __construct($CheckoutShoppingCartResult)
    {
      $this->CheckoutShoppingCartResult = $CheckoutShoppingCartResult;
    }

    /**
     * @return CheckoutShoppingCartResult
     */
    public function getCheckoutShoppingCartResult()
    {
      return $this->CheckoutShoppingCartResult;
    }

    /**
     * @param CheckoutShoppingCartResult $CheckoutShoppingCartResult
     * @return \Mindbody\Service\SaleService\CheckoutShoppingCartResponse
     */
    public function setCheckoutShoppingCartResult($CheckoutShoppingCartResult)
    {
      $this->CheckoutShoppingCartResult = $CheckoutShoppingCartResult;
      return $this;
    }

}
