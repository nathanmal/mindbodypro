<?php

namespace Mindbody\Service\AppointmentService;

class GetScheduleItems
{

    /**
     * @var GetScheduleItemsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetScheduleItemsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetScheduleItemsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetScheduleItemsRequest $Request
     * @return \Mindbody\Service\AppointmentService\GetScheduleItems
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
