<?php

namespace Mindbody\API\Struct;

class CustomPaymentInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @param float $Amount
     * @param int $ID
     */
    public function __construct($Amount, $ID)
    {
      parent::__construct();
      $this->Amount = $Amount;
      $this->ID = $ID;
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
     * @return \Mindbody\Service\SaleService\CustomPaymentInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Mindbody\Service\SaleService\CustomPaymentInfo
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
