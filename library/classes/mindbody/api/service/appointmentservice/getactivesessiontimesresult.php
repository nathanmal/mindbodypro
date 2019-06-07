<?php

namespace Mindbody\API\Service\AppointmentService;

class GetActiveSessionTimesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfDateTime $Times
     */
    protected $Times = null;

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
     * @return ArrayOfDateTime
     */
    public function getTimes()
    {
      return $this->Times;
    }

    /**
     * @param ArrayOfDateTime $Times
     * @return \Mindbody\Service\AppointmentService\GetActiveSessionTimesResult
     */
    public function setTimes($Times)
    {
      $this->Times = $Times;
      return $this;
    }

}
