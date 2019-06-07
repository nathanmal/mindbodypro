<?php

namespace Mindbody\API\Service\AppointmentService;

class GetAppointmentOptionsResponse
{

    /**
     * @var GetAppointmentOptionsResult $GetAppointmentOptionsResult
     */
    protected $GetAppointmentOptionsResult = null;

    /**
     * @param GetAppointmentOptionsResult $GetAppointmentOptionsResult
     */
    public function __construct($GetAppointmentOptionsResult)
    {
      $this->GetAppointmentOptionsResult = $GetAppointmentOptionsResult;
    }

    /**
     * @return GetAppointmentOptionsResult
     */
    public function getGetAppointmentOptionsResult()
    {
      return $this->GetAppointmentOptionsResult;
    }

    /**
     * @param GetAppointmentOptionsResult $GetAppointmentOptionsResult
     * @return \Mindbody\Service\AppointmentService\GetAppointmentOptionsResponse
     */
    public function setGetAppointmentOptionsResult($GetAppointmentOptionsResult)
    {
      $this->GetAppointmentOptionsResult = $GetAppointmentOptionsResult;
      return $this;
    }

}
