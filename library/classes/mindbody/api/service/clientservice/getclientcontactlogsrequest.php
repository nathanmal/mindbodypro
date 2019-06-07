<?php

namespace Mindbody\API\Service\ClientService;

class GetClientContactLogsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

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
     * @var boolean $ShowSystemGenerated
     */
    protected $ShowSystemGenerated = null;

    /**
     * @var ArrayOfInt $TypeIDs
     */
    protected $TypeIDs = null;

    /**
     * @var ArrayOfInt $SubtypeIDs
     */
    protected $SubtypeIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
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
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
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
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSystemGenerated()
    {
      return $this->ShowSystemGenerated;
    }

    /**
     * @param boolean $ShowSystemGenerated
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
     */
    public function setShowSystemGenerated($ShowSystemGenerated)
    {
      $this->ShowSystemGenerated = $ShowSystemGenerated;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getTypeIDs()
    {
      return $this->TypeIDs;
    }

    /**
     * @param ArrayOfInt $TypeIDs
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
     */
    public function setTypeIDs($TypeIDs)
    {
      $this->TypeIDs = $TypeIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSubtypeIDs()
    {
      return $this->SubtypeIDs;
    }

    /**
     * @param ArrayOfInt $SubtypeIDs
     * @return \Mindbody\Service\ClientService\GetClientContactLogsRequest
     */
    public function setSubtypeIDs($SubtypeIDs)
    {
      $this->SubtypeIDs = $SubtypeIDs;
      return $this;
    }

}
