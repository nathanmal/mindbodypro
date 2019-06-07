<?php

namespace Mindbody\Service\ClientService;

class GetClientContractsResult extends PagedBySitesMBResult
{

    /**
     * @var ArrayOfClientContract $Contracts
     */
    protected $Contracts = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     * @param int $ClientAssociatedSitesOffset
     * @param int $ClientAssociatedSitesTotalResults
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $ClientAssociatedSitesOffset, $ClientAssociatedSitesTotalResults)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $ClientAssociatedSitesOffset, $ClientAssociatedSitesTotalResults);
    }

    /**
     * @return ArrayOfClientContract
     */
    public function getContracts()
    {
      return $this->Contracts;
    }

    /**
     * @param ArrayOfClientContract $Contracts
     * @return \Mindbody\Service\ClientService\GetClientContractsResult
     */
    public function setContracts($Contracts)
    {
      $this->Contracts = $Contracts;
      return $this;
    }

}
