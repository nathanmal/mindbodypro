<?php

namespace Mindbody\Service\SaleService;

class GetPackagesResult extends MBResult
{

    /**
     * @var ArrayOfPackage $Packages
     */
    protected $Packages = null;

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
     * @return ArrayOfPackage
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfPackage $Packages
     * @return \Mindbody\Service\SaleService\GetPackagesResult
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
