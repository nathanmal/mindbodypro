<?php

namespace Mindbody\Service\SiteService;

class GetProspectStagesResponse
{

    /**
     * @var GetProspectStagesResult $GetProspectStagesResult
     */
    protected $GetProspectStagesResult = null;

    /**
     * @param GetProspectStagesResult $GetProspectStagesResult
     */
    public function __construct($GetProspectStagesResult)
    {
      $this->GetProspectStagesResult = $GetProspectStagesResult;
    }

    /**
     * @return GetProspectStagesResult
     */
    public function getGetProspectStagesResult()
    {
      return $this->GetProspectStagesResult;
    }

    /**
     * @param GetProspectStagesResult $GetProspectStagesResult
     * @return \Mindbody\Service\SiteService\GetProspectStagesResponse
     */
    public function setGetProspectStagesResult($GetProspectStagesResult)
    {
      $this->GetProspectStagesResult = $GetProspectStagesResult;
      return $this;
    }

}
