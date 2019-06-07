<?php

namespace Mindbody\Service\SaleService;

class Tip extends Item
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $StaffID
     */
    protected $StaffID = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Mindbody\Service\SaleService\Tip
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Mindbody\Service\SaleService\Tip
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

}
