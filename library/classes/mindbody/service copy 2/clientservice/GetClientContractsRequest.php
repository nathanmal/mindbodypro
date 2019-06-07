<?php

namespace Mindbody\Service\ClientService;

class GetClientContractsRequest extends CrossRegionalRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset, $CrossRegionalLookup);
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Mindbody\Service\ClientService\GetClientContractsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}
