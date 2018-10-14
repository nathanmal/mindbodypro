<?php

namespace Mindbody\Service\ClientService;

class GetCrossRegionalClientAssociationsResponse
{

    /**
     * @var GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     */
    protected $GetCrossRegionalClientAssociationsResult = null;

    /**
     * @param GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     */
    public function __construct($GetCrossRegionalClientAssociationsResult)
    {
      $this->GetCrossRegionalClientAssociationsResult = $GetCrossRegionalClientAssociationsResult;
    }

    /**
     * @return GetCrossRegionalClientAssociationsResult
     */
    public function getGetCrossRegionalClientAssociationsResult()
    {
      return $this->GetCrossRegionalClientAssociationsResult;
    }

    /**
     * @param GetCrossRegionalClientAssociationsResult $GetCrossRegionalClientAssociationsResult
     * @return \Mindbody\Service\ClientService\GetCrossRegionalClientAssociationsResponse
     */
    public function setGetCrossRegionalClientAssociationsResult($GetCrossRegionalClientAssociationsResult)
    {
      $this->GetCrossRegionalClientAssociationsResult = $GetCrossRegionalClientAssociationsResult;
      return $this;
    }

}
