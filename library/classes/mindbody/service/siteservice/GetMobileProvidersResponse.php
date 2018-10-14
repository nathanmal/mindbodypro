<?php

namespace Mindbody\Service\SiteService;

class GetMobileProvidersResponse
{

    /**
     * @var GetMobileProvidersResult $GetMobileProvidersResult
     */
    protected $GetMobileProvidersResult = null;

    /**
     * @param GetMobileProvidersResult $GetMobileProvidersResult
     */
    public function __construct($GetMobileProvidersResult)
    {
      $this->GetMobileProvidersResult = $GetMobileProvidersResult;
    }

    /**
     * @return GetMobileProvidersResult
     */
    public function getGetMobileProvidersResult()
    {
      return $this->GetMobileProvidersResult;
    }

    /**
     * @param GetMobileProvidersResult $GetMobileProvidersResult
     * @return \Mindbody\Service\SiteService\GetMobileProvidersResponse
     */
    public function setGetMobileProvidersResult($GetMobileProvidersResult)
    {
      $this->GetMobileProvidersResult = $GetMobileProvidersResult;
      return $this;
    }

}
