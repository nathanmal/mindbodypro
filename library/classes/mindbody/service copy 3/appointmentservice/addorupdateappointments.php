<?php

namespace Mindbody\Service\AppointmentService;

class AddOrUpdateAppointments
{

    /**
     * @var AddOrUpdateAppointmentsRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddOrUpdateAppointmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateAppointmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateAppointmentsRequest $Request
     * @return \Mindbody\Service\AppointmentService\AddOrUpdateAppointments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
