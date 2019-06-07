<?php

namespace Mindbody\API\Service\ClassService;

class AddClientsToEnrollmentsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfClassSchedule $Enrollments
     */
    protected $Enrollments = null;

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
     * @return ArrayOfClassSchedule
     */
    public function getEnrollments()
    {
      return $this->Enrollments;
    }

    /**
     * @param ArrayOfClassSchedule $Enrollments
     * @return \Mindbody\Service\ClassService\AddClientsToEnrollmentsResult
     */
    public function setEnrollments($Enrollments)
    {
      $this->Enrollments = $Enrollments;
      return $this;
    }

}
