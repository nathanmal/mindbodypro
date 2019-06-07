<?php

namespace Mindbody\API\Service\AppointmentService;

class AddOrUpdateAppointmentsResponse
{

    /**
     * @var AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     */
    protected $AddOrUpdateAppointmentsResult = null;

    /**
     * @param AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     */
    public function __construct($AddOrUpdateAppointmentsResult)
    {
      $this->AddOrUpdateAppointmentsResult = $AddOrUpdateAppointmentsResult;
    }

    /**
     * @return AddOrUpdateAppointmentsResult
     */
    public function getAddOrUpdateAppointmentsResult()
    {
      return $this->AddOrUpdateAppointmentsResult;
    }

    /**
     * @param AddOrUpdateAppointmentsResult $AddOrUpdateAppointmentsResult
     * @return \Mindbody\Service\AppointmentService\AddOrUpdateAppointmentsResponse
     */
    public function setAddOrUpdateAppointmentsResult($AddOrUpdateAppointmentsResult)
    {
      $this->AddOrUpdateAppointmentsResult = $AddOrUpdateAppointmentsResult;
      return $this;
    }

}
