<?php

namespace Mindbody\API\Service\ClassService;

class GetClassSchedulesRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfInt $LocationIDs
     */
    protected $LocationIDs = null;

    /**
     * @var ArrayOfInt $ClassScheduleIDs
     */
    protected $ClassScheduleIDs = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    protected $StaffIDs = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    protected $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    protected $SessionTypeIDs = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassScheduleIDs()
    {
      return $this->ClassScheduleIDs;
    }

    /**
     * @param ArrayOfInt $ClassScheduleIDs
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
     */
    public function setClassScheduleIDs($ClassScheduleIDs)
    {
      $this->ClassScheduleIDs = $ClassScheduleIDs;
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
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSessionTypeIDs()
    {
      return $this->SessionTypeIDs;
    }

    /**
     * @param ArrayOfInt $SessionTypeIDs
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
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
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
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
     * @return \Mindbody\Service\ClassService\GetClassSchedulesRequest
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

}
