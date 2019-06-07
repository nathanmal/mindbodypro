<?php

namespace Mindbody\API\Service\AppointmentService;

class GetActiveSessionTimesResponse
{

    /**
     * @var GetActiveSessionTimesResult $GetActiveSessionTimesResult
     */
    protected $GetActiveSessionTimesResult = null;

    /**
     * @param GetActiveSessionTimesResult $GetActiveSessionTimesResult
     */
    public function __construct($GetActiveSessionTimesResult)
    {
      $this->GetActiveSessionTimesResult = $GetActiveSessionTimesResult;
    }

    /**
     * @return GetActiveSessionTimesResult
     */
    public function getGetActiveSessionTimesResult()
    {
      return $this->GetActiveSessionTimesResult;
    }

    /**
     * @param GetActiveSessionTimesResult $GetActiveSessionTimesResult
     * @return \Mindbody\Service\AppointmentService\GetActiveSessionTimesResponse
     */
    public function setGetActiveSessionTimesResult($GetActiveSessionTimesResult)
    {
      $this->GetActiveSessionTimesResult = $GetActiveSessionTimesResult;
      return $this;
    }

}
