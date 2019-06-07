<?php

namespace Mindbody\API\Service\ClientService;

class GetClientScheduleResult extends PagedBySitesMBResult
{

    /**
     * @var ArrayOfVisit $Visits
     */
    protected $Visits = null;

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
     * @return ArrayOfVisit
     */
    public function getVisits()
    {
      return $this->Visits;
    }

    /**
     * @param ArrayOfVisit $Visits
     * @return \Mindbody\Service\ClientService\GetClientScheduleResult
     */
    public function setVisits($Visits)
    {
      $this->Visits = $Visits;
      return $this;
    }

}
