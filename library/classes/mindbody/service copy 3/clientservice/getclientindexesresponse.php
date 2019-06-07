<?php

namespace Mindbody\Service\ClientService;

class GetClientIndexesResponse
{

    /**
     * @var GetClientIndexesResult $GetClientIndexesResult
     */
    protected $GetClientIndexesResult = null;

    /**
     * @param GetClientIndexesResult $GetClientIndexesResult
     */
    public function __construct($GetClientIndexesResult)
    {
      $this->GetClientIndexesResult = $GetClientIndexesResult;
    }

    /**
     * @return GetClientIndexesResult
     */
    public function getGetClientIndexesResult()
    {
      return $this->GetClientIndexesResult;
    }

    /**
     * @param GetClientIndexesResult $GetClientIndexesResult
     * @return \Mindbody\Service\ClientService\GetClientIndexesResponse
     */
    public function setGetClientIndexesResult($GetClientIndexesResult)
    {
      $this->GetClientIndexesResult = $GetClientIndexesResult;
      return $this;
    }

}
