<?php

namespace Mindbody\API\Service\SiteService;

class GetRelationshipsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfRelationship $Relationships
     */
    protected $Relationships = null;

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
     * @return ArrayOfRelationship
     */
    public function getRelationships()
    {
      return $this->Relationships;
    }

    /**
     * @param ArrayOfRelationship $Relationships
     * @return \Mindbody\Service\SiteService\GetRelationshipsResult
     */
    public function setRelationships($Relationships)
    {
      $this->Relationships = $Relationships;
      return $this;
    }

}
