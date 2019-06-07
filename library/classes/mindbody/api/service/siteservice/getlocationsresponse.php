<?php

namespace Mindbody\API\Service\SiteService;

class GetLocationsResponse
{

    /**
     * @var GetLocationsResult $GetLocationsResult
     */
    protected $GetLocationsResult = null;

    /**
     * @param GetLocationsResult $GetLocationsResult
     */
    public function __construct($GetLocationsResult)
    {
      $this->GetLocationsResult = $GetLocationsResult;
    }

    /**
     * @return GetLocationsResult
     */
    public function getGetLocationsResult()
    {
      return $this->GetLocationsResult;
    }

    /**
     * @param GetLocationsResult $GetLocationsResult
     * @return \Mindbody\Service\SiteService\GetLocationsResponse
     */
    public function setGetLocationsResult($GetLocationsResult)
    {
      $this->GetLocationsResult = $GetLocationsResult;
      return $this;
    }

}
