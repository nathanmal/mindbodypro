<?php

namespace Mindbody\Service\SaleService;

class GetSalesResult extends MBResult
{

    /**
     * @var ArrayOfSale $Sales
     */
    protected $Sales = null;

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
     * @return ArrayOfSale
     */
    public function getSales()
    {
      return $this->Sales;
    }

    /**
     * @param ArrayOfSale $Sales
     * @return \Mindbody\Service\SaleService\GetSalesResult
     */
    public function setSales($Sales)
    {
      $this->Sales = $Sales;
      return $this;
    }

}
