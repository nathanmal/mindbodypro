<?php

namespace Mindbody\API\Service\ClientService;

class GetClientsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfClient $Clients
     */
    protected $Clients = null;

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
     * @return ArrayOfClient
     */
    public function getClients()
    {
      return $this->Clients;
    }

    /**
     * @param ArrayOfClient $Clients
     * @return \Mindbody\Service\ClientService\GetClientsResult
     */
    public function setClients($Clients)
    {
      $this->Clients = $Clients;
      return $this;
    }

}
