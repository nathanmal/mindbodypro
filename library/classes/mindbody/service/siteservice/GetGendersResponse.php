<?php

namespace Mindbody\Service\SiteService;

class GetGendersResponse
{

    /**
     * @var GetGendersResult $GetGendersResult
     */
    protected $GetGendersResult = null;

    /**
     * @param GetGendersResult $GetGendersResult
     */
    public function __construct($GetGendersResult)
    {
      $this->GetGendersResult = $GetGendersResult;
    }

    /**
     * @return GetGendersResult
     */
    public function getGetGendersResult()
    {
      return $this->GetGendersResult;
    }

    /**
     * @param GetGendersResult $GetGendersResult
     * @return \Mindbody\Service\SiteService\GetGendersResponse
     */
    public function setGetGendersResult($GetGendersResult)
    {
      $this->GetGendersResult = $GetGendersResult;
      return $this;
    }

}
