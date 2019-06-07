<?php

namespace Mindbody\Service\SaleService;

class DebitAccountInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount)
    {
      parent::__construct();
      $this->Amount = $Amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Mindbody\Service\SaleService\DebitAccountInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
