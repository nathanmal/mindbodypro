<?php

namespace Mindbody\Service\SiteService;

class GetResourceScheduleResponse
{

    /**
     * @var GetResourceScheduleResult $GetResourceScheduleResult
     */
    protected $GetResourceScheduleResult = null;

    /**
     * @param GetResourceScheduleResult $GetResourceScheduleResult
     */
    public function __construct($GetResourceScheduleResult)
    {
      $this->GetResourceScheduleResult = $GetResourceScheduleResult;
    }

    /**
     * @return GetResourceScheduleResult
     */
    public function getGetResourceScheduleResult()
    {
      return $this->GetResourceScheduleResult;
    }

    /**
     * @param GetResourceScheduleResult $GetResourceScheduleResult
     * @return \Mindbody\Service\SiteService\GetResourceScheduleResponse
     */
    public function setGetResourceScheduleResult($GetResourceScheduleResult)
    {
      $this->GetResourceScheduleResult = $GetResourceScheduleResult;
      return $this;
    }

}
