<?php

namespace Mindbody\API\Service\ClientService;

class UpdateClientServicesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfClientService $ClientServices
     */
    protected $ClientServices = null;

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
     * @return ArrayOfClientService
     */
    public function getClientServices()
    {
      return $this->ClientServices;
    }

    /**
     * @param ArrayOfClientService $ClientServices
     * @return \Mindbody\Service\ClientService\UpdateClientServicesResult
     */
    public function setClientServices($ClientServices)
    {
      $this->ClientServices = $ClientServices;
      return $this;
    }

}
