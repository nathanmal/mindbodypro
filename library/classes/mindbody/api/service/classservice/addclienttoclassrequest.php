<?php

namespace Mindbody\API\Service\ClassService;

class AddClientToClassRequest extends \Mindbody\API\Common\MBRequest
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
     * @var boolean $Test
     */
    protected $Test = null;

    /**
     * @var boolean $RequirePayment
     */
    protected $RequirePayment = null;

    /**
     * @var boolean $Waitlist
     */
    protected $Waitlist = null;

    /**
     * @var boolean $SendEmail
     */
    protected $SendEmail = null;

    /**
     * @var int $WaitlistEntryID
     */
    protected $WaitlistEntryID = null;

    /**
     * @var int $ClientServiceID
     */
    protected $ClientServiceID = null;

    /**
     * @var boolean $CrossRegionalBooking
     */
    protected $CrossRegionalBooking = null;

    /**
     * @var int $CrossRegionalBookingClientServiceSiteId
     */
    protected $CrossRegionalBookingClientServiceSiteId = null;

    /**
     * @param int $ClassID
     * @param boolean $CrossRegionalBooking
     */
    public function __construct($ClassID, $CrossRegionalBooking)
    {
      parent::__construct();
      $this->ClassID = $ClassID;
      $this->CrossRegionalBooking = $CrossRegionalBooking;
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
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
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
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirePayment()
    {
      return $this->RequirePayment;
    }

    /**
     * @param boolean $RequirePayment
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setRequirePayment($RequirePayment)
    {
      $this->RequirePayment = $RequirePayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWaitlist()
    {
      return $this->Waitlist;
    }

    /**
     * @param boolean $Waitlist
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setWaitlist($Waitlist)
    {
      $this->Waitlist = $Waitlist;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaitlistEntryID()
    {
      return $this->WaitlistEntryID;
    }

    /**
     * @param int $WaitlistEntryID
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setWaitlistEntryID($WaitlistEntryID)
    {
      $this->WaitlistEntryID = $WaitlistEntryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientServiceID()
    {
      return $this->ClientServiceID;
    }

    /**
     * @param int $ClientServiceID
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setClientServiceID($ClientServiceID)
    {
      $this->ClientServiceID = $ClientServiceID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossRegionalBooking()
    {
      return $this->CrossRegionalBooking;
    }

    /**
     * @param boolean $CrossRegionalBooking
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setCrossRegionalBooking($CrossRegionalBooking)
    {
      $this->CrossRegionalBooking = $CrossRegionalBooking;
      return $this;
    }

    /**
     * @return int
     */
    public function getCrossRegionalBookingClientServiceSiteId()
    {
      return $this->CrossRegionalBookingClientServiceSiteId;
    }

    /**
     * @param int $CrossRegionalBookingClientServiceSiteId
     * @return \Mindbody\Service\ClassService\AddClientToClassRequest
     */
    public function setCrossRegionalBookingClientServiceSiteId($CrossRegionalBookingClientServiceSiteId)
    {
      $this->CrossRegionalBookingClientServiceSiteId = $CrossRegionalBookingClientServiceSiteId;
      return $this;
    }

}
