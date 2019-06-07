<?php

namespace Mindbody\Service\ClientService;

class Visit extends MBObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ClassID
     */
    protected $ClassID = null;

    /**
     * @var int $AppointmentID
     */
    protected $AppointmentID = null;

    /**
     * @var string $AppointmentGenderPreference
     */
    protected $AppointmentGenderPreference = null;

    /**
     * @var \DateTime $StartDateTime
     */
    protected $StartDateTime = null;

    /**
     * @var boolean $LateCancelled
     */
    protected $LateCancelled = null;

    /**
     * @var \DateTime $EndDateTime
     */
    protected $EndDateTime = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var Staff $Staff
     */
    protected $Staff = null;

    /**
     * @var Location $Location
     */
    protected $Location = null;

    /**
     * @var Client $Client
     */
    protected $Client = null;

    /**
     * @var boolean $WebSignup
     */
    protected $WebSignup = null;

    /**
     * @var ActionCode $Action
     */
    protected $Action = null;

    /**
     * @var boolean $SignedIn
     */
    protected $SignedIn = null;

    /**
     * @var string $AppointmentStatus
     */
    protected $AppointmentStatus = null;

    /**
     * @var boolean $MakeUp
     */
    protected $MakeUp = null;

    /**
     * @var ClientService $Service
     */
    protected $Service = null;

    /**
     * @var \DateTime $LastModifiedDateTime
     */
    protected $LastModifiedDateTime = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAppointmentID()
    {
      return $this->AppointmentID;
    }

    /**
     * @param int $AppointmentID
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setAppointmentID($AppointmentID)
    {
      $this->AppointmentID = $AppointmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentGenderPreference()
    {
      return $this->AppointmentGenderPreference;
    }

    /**
     * @param string $AppointmentGenderPreference
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setAppointmentGenderPreference($AppointmentGenderPreference)
    {
      $this->AppointmentGenderPreference = $AppointmentGenderPreference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDateTime
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLateCancelled()
    {
      return $this->LateCancelled;
    }

    /**
     * @param boolean $LateCancelled
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setLateCancelled($LateCancelled)
    {
      $this->LateCancelled = $LateCancelled;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDateTime
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Location $Location
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWebSignup()
    {
      return $this->WebSignup;
    }

    /**
     * @param boolean $WebSignup
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setWebSignup($WebSignup)
    {
      $this->WebSignup = $WebSignup;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignedIn()
    {
      return $this->SignedIn;
    }

    /**
     * @param boolean $SignedIn
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setSignedIn($SignedIn)
    {
      $this->SignedIn = $SignedIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentStatus()
    {
      return $this->AppointmentStatus;
    }

    /**
     * @param string $AppointmentStatus
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setAppointmentStatus($AppointmentStatus)
    {
      $this->AppointmentStatus = $AppointmentStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMakeUp()
    {
      return $this->MakeUp;
    }

    /**
     * @param boolean $MakeUp
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setMakeUp($MakeUp)
    {
      $this->MakeUp = $MakeUp;
      return $this;
    }

    /**
     * @return ClientService
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param ClientService $Service
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDateTime()
    {
      if ($this->LastModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDateTime
     * @return \Mindbody\Service\ClientService\Visit
     */
    public function setLastModifiedDateTime(\DateTime $LastModifiedDateTime = null)
    {
      if ($LastModifiedDateTime == null) {
       $this->LastModifiedDateTime = null;
      } else {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
