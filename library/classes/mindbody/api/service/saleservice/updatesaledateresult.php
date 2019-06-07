<?php

namespace Mindbody\API\Service\SaleService;

class UpdateSaleDateResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var Sale $Sale
     */
    protected $Sale = null;

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
     * @return Sale
     */
    public function getSale()
    {
      return $this->Sale;
    }

    /**
     * @param Sale $Sale
     * @return \Mindbody\Service\SaleService\UpdateSaleDateResult
     */
    public function setSale($Sale)
    {
      $this->Sale = $Sale;
      return $this;
    }

}
