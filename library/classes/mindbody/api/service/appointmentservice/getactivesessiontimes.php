<?php

namespace Mindbody\API\Service\AppointmentService;

class GetActiveSessionTimes
{

    /**
     * @var GetActiveSessionTimesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetActiveSessionTimesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetActiveSessionTimesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetActiveSessionTimesRequest $Request
     * @return \Mindbody\Service\AppointmentService\GetActiveSessionTimes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
