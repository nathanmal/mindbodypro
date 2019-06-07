<?php

namespace Mindbody\API\Service\AppointmentService;

class GetScheduleItemsResponse
{

    /**
     * @var GetScheduleItemsResult $GetScheduleItemsResult
     */
    protected $GetScheduleItemsResult = null;

    /**
     * @param GetScheduleItemsResult $GetScheduleItemsResult
     */
    public function __construct($GetScheduleItemsResult)
    {
      $this->GetScheduleItemsResult = $GetScheduleItemsResult;
    }

    /**
     * @return GetScheduleItemsResult
     */
    public function getGetScheduleItemsResult()
    {
      return $this->GetScheduleItemsResult;
    }

    /**
     * @param GetScheduleItemsResult $GetScheduleItemsResult
     * @return \Mindbody\Service\AppointmentService\GetScheduleItemsResponse
     */
    public function setGetScheduleItemsResult($GetScheduleItemsResult)
    {
      $this->GetScheduleItemsResult = $GetScheduleItemsResult;
      return $this;
    }

}
