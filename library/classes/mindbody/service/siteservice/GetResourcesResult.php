<?php

namespace Mindbody\Service\SiteService;

class GetResourcesResult extends MBResult
{

    /**
     * @var ArrayOfResource $Resources
     */
    protected $Resources = null;

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
     * @return ArrayOfResource
     */
    public function getResources()
    {
      return $this->Resources;
    }

    /**
     * @param ArrayOfResource $Resources
     * @return \Mindbody\Service\SiteService\GetResourcesResult
     */
    public function setResources($Resources)
    {
      $this->Resources = $Resources;
      return $this;
    }

}
