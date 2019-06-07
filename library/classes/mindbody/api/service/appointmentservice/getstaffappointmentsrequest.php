<?php

namespace Mindbody\API\Service\AppointmentService;

class GetStaffAppointmentsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var StaffCredentials $StaffCredentials
     */
    protected $StaffCredentials = null;

    /**
     * @var ArrayOfInt $AppointmentIDs
     */
    protected $AppointmentIDs = null;

    /**
     * @var ArrayOfInt $LocationIDs
     */
    protected $LocationIDs = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    protected $StaffIDs = null;

    /**
     * @var ArrayOfString $ClientIDs
     */
    protected $ClientIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return StaffCredentials
     */
    public function getStaffCredentials()
    {
      return $this->StaffCredentials;
    }

    /**
     * @param StaffCredentials $StaffCredentials
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setStaffCredentials($StaffCredentials)
    {
      $this->StaffCredentials = $StaffCredentials;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAppointmentIDs()
    {
      return $this->AppointmentIDs;
    }

    /**
     * @param ArrayOfInt $AppointmentIDs
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setAppointmentIDs($AppointmentIDs)
    {
      $this->AppointmentIDs = $AppointmentIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationIDs()
    {
      return $this->LocationIDs;
    }

    /**
     * @param ArrayOfInt $LocationIDs
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getStaffIDs()
    {
      return $this->StaffIDs;
    }

    /**
     * @param ArrayOfLong $StaffIDs
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOfString $ClientIDs
     * @return \Mindbody\Service\AppointmentService\GetStaffAppointmentsRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

}
