<?php

namespace Mindbody\API\Struct;

class TrackDataInfo extends PaymentInfo
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $TrackData
     */
    protected $TrackData = null;

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
     * @return \Mindbody\Service\SaleService\TrackDataInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackData()
    {
      return $this->TrackData;
    }

    /**
     * @param string $TrackData
     * @return \Mindbody\Service\SaleService\TrackDataInfo
     */
    public function setTrackData($TrackData)
    {
      $this->TrackData = $TrackData;
      return $this;
    }

}
