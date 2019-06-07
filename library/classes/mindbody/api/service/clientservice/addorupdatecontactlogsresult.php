<?php

namespace Mindbody\API\Service\ClientService;

class AddOrUpdateContactLogsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfContactLog $ContactLogs
     */
    protected $ContactLogs = null;

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
     * @return ArrayOfContactLog
     */
    public function getContactLogs()
    {
      return $this->ContactLogs;
    }

    /**
     * @param ArrayOfContactLog $ContactLogs
     * @return \Mindbody\Service\ClientService\AddOrUpdateContactLogsResult
     */
    public function setContactLogs($ContactLogs)
    {
      $this->ContactLogs = $ContactLogs;
      return $this;
    }

}
