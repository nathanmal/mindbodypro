<?php

namespace Mindbody\Service\SiteService;

class GetMobileProvidersResult extends MBResult
{

    /**
     * @var ArrayOfMobileProvider $MobileProviders
     */
    protected $MobileProviders = null;

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
     * @return ArrayOfMobileProvider
     */
    public function getMobileProviders()
    {
      return $this->MobileProviders;
    }

    /**
     * @param ArrayOfMobileProvider $MobileProviders
     * @return \Mindbody\Service\SiteService\GetMobileProvidersResult
     */
    public function setMobileProviders($MobileProviders)
    {
      $this->MobileProviders = $MobileProviders;
      return $this;
    }

}
