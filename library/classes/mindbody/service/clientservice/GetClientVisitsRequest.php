<?php

namespace Mindbody\Service\ClientService;

class GetClientVisitsRequest extends PagedBySitesMBRequest
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
     * @var boolean $UnpaidsOnly
     */
    protected $UnpaidsOnly = null;

    /**
     * @var boolean $CrossRegionalLookup
     */
    protected $CrossRegionalLookup = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     * @param boolean $UnpaidsOnly
     * @param boolean $CrossRegionalLookup
     */
    public function __construct($ClientAssociatedSitesOffset, $UnpaidsOnly, $CrossRegionalLookup)
    {
      parent::__construct($ClientAssociatedSitesOffset);
      $this->UnpaidsOnly = $UnpaidsOnly;
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
     * @return \Mindbody\Service\ClientService\GetClientVisitsRequest
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
     * @return \Mindbody\Service\ClientService\GetClientVisitsRequest
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
     * @return \Mindbody\Service\ClientService\GetClientVisitsRequest
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
    public function getUnpaidsOnly()
    {
      return $this->UnpaidsOnly;
    }

    /**
     * @param boolean $UnpaidsOnly
     * @return \Mindbody\Service\ClientService\GetClientVisitsRequest
     */
    public function setUnpaidsOnly($UnpaidsOnly)
    {
      $this->UnpaidsOnly = $UnpaidsOnly;
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
     * @return \Mindbody\Service\ClientService\GetClientVisitsRequest
     */
    public function setCrossRegionalLookup($CrossRegionalLookup)
    {
      $this->CrossRegionalLookup = $CrossRegionalLookup;
      return $this;
    }

}
