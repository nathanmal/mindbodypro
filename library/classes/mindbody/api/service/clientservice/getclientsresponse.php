<?php

namespace Mindbody\API\Service\ClientService;

class GetClientsResponse
{

    /**
     * @var GetClientsResult $GetClientsResult
     */
    protected $GetClientsResult = null;

    /**
     * @param GetClientsResult $GetClientsResult
     */
    public function __construct($GetClientsResult)
    {
      $this->GetClientsResult = $GetClientsResult;
    }

    /**
     * @return GetClientsResult
     */
    public function getGetClientsResult()
    {
      return $this->GetClientsResult;
    }

    /**
     * @param GetClientsResult $GetClientsResult
     * @return \Mindbody\Service\ClientService\GetClientsResponse
     */
    public function setGetClientsResult($GetClientsResult)
    {
      $this->GetClientsResult = $GetClientsResult;
      return $this;
    }

}
