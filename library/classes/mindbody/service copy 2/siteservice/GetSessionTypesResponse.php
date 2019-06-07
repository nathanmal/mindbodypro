<?php

namespace Mindbody\Service\SiteService;

class GetSessionTypesResponse
{

    /**
     * @var GetSessionTypesResult $GetSessionTypesResult
     */
    protected $GetSessionTypesResult = null;

    /**
     * @param GetSessionTypesResult $GetSessionTypesResult
     */
    public function __construct($GetSessionTypesResult)
    {
      $this->GetSessionTypesResult = $GetSessionTypesResult;
    }

    /**
     * @return GetSessionTypesResult
     */
    public function getGetSessionTypesResult()
    {
      return $this->GetSessionTypesResult;
    }

    /**
     * @param GetSessionTypesResult $GetSessionTypesResult
     * @return \Mindbody\Service\SiteService\GetSessionTypesResponse
     */
    public function setGetSessionTypesResult($GetSessionTypesResult)
    {
      $this->GetSessionTypesResult = $GetSessionTypesResult;
      return $this;
    }

}
