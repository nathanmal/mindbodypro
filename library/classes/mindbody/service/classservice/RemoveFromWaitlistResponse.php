<?php

namespace Mindbody\Service\ClassService;

class RemoveFromWaitlistResponse
{

    /**
     * @var RemoveFromWaitlistResult $RemoveFromWaitlistResult
     */
    protected $RemoveFromWaitlistResult = null;

    /**
     * @param RemoveFromWaitlistResult $RemoveFromWaitlistResult
     */
    public function __construct($RemoveFromWaitlistResult)
    {
      $this->RemoveFromWaitlistResult = $RemoveFromWaitlistResult;
    }

    /**
     * @return RemoveFromWaitlistResult
     */
    public function getRemoveFromWaitlistResult()
    {
      return $this->RemoveFromWaitlistResult;
    }

    /**
     * @param RemoveFromWaitlistResult $RemoveFromWaitlistResult
     * @return \Mindbody\Service\ClassService\RemoveFromWaitlistResponse
     */
    public function setRemoveFromWaitlistResult($RemoveFromWaitlistResult)
    {
      $this->RemoveFromWaitlistResult = $RemoveFromWaitlistResult;
      return $this;
    }

}
