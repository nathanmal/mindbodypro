<?php

namespace Mindbody\API\Service\SiteService;

class GetProgramsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfProgram $Programs
     */
    protected $Programs = null;

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
     * @return ArrayOfProgram
     */
    public function getPrograms()
    {
      return $this->Programs;
    }

    /**
     * @param ArrayOfProgram $Programs
     * @return \Mindbody\Service\SiteService\GetProgramsResult
     */
    public function setPrograms($Programs)
    {
      $this->Programs = $Programs;
      return $this;
    }

}
