<?php

namespace Mindbody\API\Service\AppointmentService;

class GetStaffAppointmentsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfAppointment $Appointments
     */
    protected $Appointments = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfAppointment
     */
    public function getAppointments()
    {
      return $this->Appointments;
    }

    /**
     * @param ArrayOfAppointment $Appointments
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsResult
     */
    public function setAppointments($Appointments)
    {
      $this->Appointments = $Appointments;
      return $this;
    }

}
