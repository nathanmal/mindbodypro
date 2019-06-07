<?php

namespace Mindbody\Service\ClientService;

class GetActiveClientMembershipsResponse
{

    /**
     * @var GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     */
    protected $GetActiveClientMembershipsResult = null;

    /**
     * @param GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     */
    public function __construct($GetActiveClientMembershipsResult)
    {
      $this->GetActiveClientMembershipsResult = $GetActiveClientMembershipsResult;
    }

    /**
     * @return GetActiveClientMembershipsResult
     */
    public function getGetActiveClientMembershipsResult()
    {
      return $this->GetActiveClientMembershipsResult;
    }

    /**
     * @param GetActiveClientMembershipsResult $GetActiveClientMembershipsResult
     * @return \Mindbody\Service\ClientService\GetActiveClientMembershipsResponse
     */
    public function setGetActiveClientMembershipsResult($GetActiveClientMembershipsResult)
    {
      $this->GetActiveClientMembershipsResult = $GetActiveClientMembershipsResult;
      return $this;
    }

}
