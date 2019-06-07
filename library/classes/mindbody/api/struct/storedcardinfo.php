<?php

namespace Mindbody\API\Struct;

class StoredCardInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $LastFour
     */
    protected $LastFour = null;

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
     * @return \Mindbody\Service\SaleService\StoredCardInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastFour()
    {
      return $this->LastFour;
    }

    /**
     * @param string $LastFour
     * @return \Mindbody\Service\SaleService\StoredCardInfo
     */
    public function setLastFour($LastFour)
    {
      $this->LastFour = $LastFour;
      return $this;
    }

}
