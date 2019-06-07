<?php

namespace Mindbody\API\Service\ClientService;

class GetClientServicesRequest extends PagedBySitesMBRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $ClassID
     */
    protected $ClassID = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    protected $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    protected $SessionTypeIDs = null;

    /**
     * @var ArrayOfInt $LocationIDs
     */
    protected $LocationIDs = null;

    /**
     * @var int $VisitCount
     */
    protected $VisitCount = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $ShowActiveOnly
     */
    protected $ShowActiveOnly = null;

    /**
     * @var boolean $CrossRegionalLookup
     */
    protected $CrossRegionalLookup = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param int $ClassID
     * @param boolean $ShowActiveOnly
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $ClassID, $ShowActiveOnly, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset);
      $this->ClassID = $ClassID;
      $this->ShowActiveOnly = $ShowActiveOnly;
      $this->CrossRegionalLookup = $CrossRegionalLookup;
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getVisitCount()
    {
      return $this->VisitCount;
    }

    /**
     * @param int $VisitCount
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setVisitCount($VisitCount)
    {
      $this->VisitCount = $VisitCount;
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
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
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
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
     * @return boolean
     */
    public function getShowActiveOnly()
    {
      return $this->ShowActiveOnly;
    }

    /**
     * @param boolean $ShowActiveOnly
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setShowActiveOnly($ShowActiveOnly)
    {
      $this->ShowActiveOnly = $ShowActiveOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossRegionalLookup()
    {
      return $this->CrossRegionalLookup;
    }

    /**
     * @param boolean $CrossRegionalLookup
     * @return \Mindbody\Service\ClientService\GetClientServicesRequest
     */
    public function setCrossRegionalLookup($CrossRegionalLookup)
    {
      $this->CrossRegionalLookup = $CrossRegionalLookup;
      return $this;
    }

}
