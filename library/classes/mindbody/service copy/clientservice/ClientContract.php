<?php

namespace Mindbody\Service\ClientService;

class ClientContract extends MBObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $ContractName
     */
    protected $ContractName = null;

    /**
     * @var int $SiteID
     */
    protected $SiteID = null;

    /**
     * @var \DateTime $AgreementDate
     */
    protected $AgreementDate = null;

    /**
     * @var int $OriginationLocationID
     */
    protected $OriginationLocationID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var EAutopayStatus $AutopayStatus
     */
    protected $AutopayStatus = null;

    /**
     * @var ArrayOfUpcomingAutopayEvent $UpcomingAutopayEvents
     */
    protected $UpcomingAutopayEvents = null;

    /**
     * @param int $SiteID
     * @param \DateTime $AgreementDate
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param EAutopayStatus $AutopayStatus
     */
    public function __construct($SiteID, \DateTime $AgreementDate, \DateTime $StartDate, \DateTime $EndDate, $AutopayStatus)
    {
      parent::__construct();
      $this->SiteID = $SiteID;
      $this->AgreementDate = $AgreementDate->format(\DateTime::ATOM);
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      $this->AutopayStatus = $AutopayStatus;
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
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractName()
    {
      return $this->ContractName;
    }

    /**
     * @param string $ContractName
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setContractName($ContractName)
    {
      $this->ContractName = $ContractName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAgreementDate()
    {
      if ($this->AgreementDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AgreementDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AgreementDate
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setAgreementDate(\DateTime $AgreementDate)
    {
      $this->AgreementDate = $AgreementDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginationLocationID()
    {
      return $this->OriginationLocationID;
    }

    /**
     * @param int $OriginationLocationID
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setOriginationLocationID($OriginationLocationID)
    {
      $this->OriginationLocationID = $OriginationLocationID;
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
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
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
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return EAutopayStatus
     */
    public function getAutopayStatus()
    {
      return $this->AutopayStatus;
    }

    /**
     * @param EAutopayStatus $AutopayStatus
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setAutopayStatus($AutopayStatus)
    {
      $this->AutopayStatus = $AutopayStatus;
      return $this;
    }

    /**
     * @return ArrayOfUpcomingAutopayEvent
     */
    public function getUpcomingAutopayEvents()
    {
      return $this->UpcomingAutopayEvents;
    }

    /**
     * @param ArrayOfUpcomingAutopayEvent $UpcomingAutopayEvents
     * @return \Mindbody\Service\ClientService\ClientContract
     */
    public function setUpcomingAutopayEvents($UpcomingAutopayEvents)
    {
      $this->UpcomingAutopayEvents = $UpcomingAutopayEvents;
      return $this;
    }

}
