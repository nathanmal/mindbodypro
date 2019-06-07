<?php

namespace Mindbody\API\Service\SiteService;

class GetSessionTypesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfSessionType $SessionTypes
     */
    protected $SessionTypes = null;

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
     * @return ArrayOfSessionType
     */
    public function getSessionTypes()
    {
      return $this->SessionTypes;
    }

    /**
     * @param ArrayOfSessionType $SessionTypes
     * @return \Mindbody\Service\SiteService\GetSessionTypesResult
     */
    public function setSessionTypes($SessionTypes)
    {
      $this->SessionTypes = $SessionTypes;
      return $this;
    }

}
