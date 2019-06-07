<?php

namespace Mindbody\Service\ClassService;

class GetWaitlistEntriesResponse
{

    /**
     * @var GetWaitlistEntriesResult $GetWaitlistEntriesResult
     */
    protected $GetWaitlistEntriesResult = null;

    /**
     * @param GetWaitlistEntriesResult $GetWaitlistEntriesResult
     */
    public function __construct($GetWaitlistEntriesResult)
    {
      $this->GetWaitlistEntriesResult = $GetWaitlistEntriesResult;
    }

    /**
     * @return GetWaitlistEntriesResult
     */
    public function getGetWaitlistEntriesResult()
    {
      return $this->GetWaitlistEntriesResult;
    }

    /**
     * @param GetWaitlistEntriesResult $GetWaitlistEntriesResult
     * @return \Mindbody\Service\ClassService\GetWaitlistEntriesResponse
     */
    public function setGetWaitlistEntriesResult($GetWaitlistEntriesResult)
    {
      $this->GetWaitlistEntriesResult = $GetWaitlistEntriesResult;
      return $this;
    }

}
