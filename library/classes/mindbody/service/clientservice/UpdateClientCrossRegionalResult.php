<?php

namespace Mindbody\Service\ClientService;

class UpdateClientCrossRegionalResult extends MBResult
{

    /**
     * @var Client $Client
     */
    protected $Client = null;

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
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Mindbody\Service\ClientService\UpdateClientCrossRegionalResult
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

}
