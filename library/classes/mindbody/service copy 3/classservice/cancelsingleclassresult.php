<?php

namespace Mindbody\Service\ClassService;

class CancelSingleClassResult extends MBResult
{

    /**
     * @var ClassCustom $Class
     */
    protected $Class = null;

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
     * @return ClassCustom
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ClassCustom $Class
     * @return \Mindbody\Service\ClassService\CancelSingleClassResult
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

}
