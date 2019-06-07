<?php

namespace Mindbody\API\Service\SaleService;

class GetContractsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfContract $Contracts
     */
    protected $Contracts = null;

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
     * @return ArrayOfContract
     */
    public function getContracts()
    {
      return $this->Contracts;
    }

    /**
     * @param ArrayOfContract $Contracts
     * @return \Mindbody\Service\SaleService\GetContractsResult
     */
    public function setContracts($Contracts)
    {
      $this->Contracts = $Contracts;
      return $this;
    }

}
