<?php

namespace Mindbody\Service\AppointmentService;

class GetStaffAppointments
{

    /**
     * @var GetStaffAppointmentsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetStaffAppointmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffAppointmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffAppointmentsRequest $Request
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
