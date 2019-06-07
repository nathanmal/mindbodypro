<?php

namespace Mindbody\Service\SaleService;

class ReturnSaleResult extends MBResult
{

    /**
     * @var int $ReturnSaleID
     */
    protected $ReturnSaleID = null;

    /**
     * @var int $TrainerID
     */
    protected $TrainerID = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return int
     */
    public function getReturnSaleID()
    {
      return $this->ReturnSaleID;
    }

    /**
     * @param int $ReturnSaleID
     * @return \Mindbody\Service\SaleService\ReturnSaleResult
     */
    public function setReturnSaleID($ReturnSaleID)
    {
      $this->ReturnSaleID = $ReturnSaleID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrainerID()
    {
      return $this->TrainerID;
    }

    /**
     * @param int $TrainerID
     * @return \Mindbody\Service\SaleService\ReturnSaleResult
     */
    public function setTrainerID($TrainerID)
    {
      $this->TrainerID = $TrainerID;
      return $this;
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
     * @return \Mindbody\Service\SaleService\ReturnSaleResult
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
