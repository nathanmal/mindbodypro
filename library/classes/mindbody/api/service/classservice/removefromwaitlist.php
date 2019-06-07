<?php

namespace Mindbody\API\Service\ClassService;

class RemoveFromWaitlist
{

    /**
     * @var RemoveFromWaitlistRequest $Request
     */
    protected $Request = null;

    /**
     * @param RemoveFromWaitlistRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return RemoveFromWaitlistRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RemoveFromWaitlistRequest $Request
     * @return \Mindbody\Service\ClassService\RemoveFromWaitlist
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
