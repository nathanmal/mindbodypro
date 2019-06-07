<?php

namespace Mindbody\API\Service\SiteService;

class GetProgramsResponse
{

    /**
     * @var GetProgramsResult $GetProgramsResult
     */
    protected $GetProgramsResult = null;

    /**
     * @param GetProgramsResult $GetProgramsResult
     */
    public function __construct($GetProgramsResult)
    {
      $this->GetProgramsResult = $GetProgramsResult;
    }

    /**
     * @return GetProgramsResult
     */
    public function getGetProgramsResult()
    {
      return $this->GetProgramsResult;
    }

    /**
     * @param GetProgramsResult $GetProgramsResult
     * @return \Mindbody\Service\SiteService\GetProgramsResponse
     */
    public function setGetProgramsResult($GetProgramsResult)
    {
      $this->GetProgramsResult = $GetProgramsResult;
      return $this;
    }

}
