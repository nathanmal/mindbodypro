<?php

namespace Mindbody\API\Service\ClassService;

class GetSemestersResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfSemester $Semesters
     */
    protected $Semesters = null;

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
     * @return ArrayOfSemester
     */
    public function getSemesters()
    {
      return $this->Semesters;
    }

    /**
     * @param ArrayOfSemester $Semesters
     * @return \Mindbody\Service\ClassService\GetSemestersResult
     */
    public function setSemesters($Semesters)
    {
      $this->Semesters = $Semesters;
      return $this;
    }

}
