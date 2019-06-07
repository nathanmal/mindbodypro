<?php

namespace Mindbody\API\Service\ClientService;

class GetClientPurchasesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfSaleItem $Purchases
     */
    protected $Purchases = null;

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
     * @return ArrayOfSaleItem
     */
    public function getPurchases()
    {
      return $this->Purchases;
    }

    /**
     * @param ArrayOfSaleItem $Purchases
     * @return \Mindbody\Service\ClientService\GetClientPurchasesResult
     */
    public function setPurchases($Purchases)
    {
      $this->Purchases = $Purchases;
      return $this;
    }

}
