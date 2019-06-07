<?php

namespace Mindbody\API\Service\ClassService;

class GetClassSchedules
{

    /**
     * @var GetClassSchedulesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClassSchedulesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassSchedulesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassSchedulesRequest $Request
     * @return \Mindbody\Service\ClassService\GetClassSchedules
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
