<?php

namespace Mindbody\Service\ClassService;

class RemoveClientsFromClassesResult extends MBResult
{

    /**
     * @var ArrayOfClass $Classes
     */
    protected $Classes = null;

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
     * @return ArrayOfClass
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfClass $Classes
     * @return \Mindbody\Service\ClassService\RemoveClientsFromClassesResult
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
      return $this;
    }

}
