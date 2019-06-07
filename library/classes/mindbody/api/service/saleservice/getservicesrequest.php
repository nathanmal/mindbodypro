<?php

namespace Mindbody\API\Service\SaleService;

class GetServicesRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    protected $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    protected $SessionTypeIDs = null;

    /**
     * @var ArrayOfString $ServiceIDs
     */
    protected $ServiceIDs = null;

    /**
     * @var int $ClassID
     */
    protected $ClassID = null;

    /**
     * @var int $ClassScheduleID
     */
    protected $ClassScheduleID = null;

    /**
     * @var boolean $SellOnline
     */
    protected $SellOnline = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @var boolean $HideRelatedPrograms
     */
    protected $HideRelatedPrograms = null;

    /**
     * @var int $StaffID
     */
    protected $StaffID = null;

    /**
     * @var boolean $UseOnlineStoreTaxRate
     */
    protected $UseOnlineStoreTaxRate = null;

    /**
     * @param int $LocationID
     * @param boolean $HideRelatedPrograms
     */
    public function __construct($LocationID, $HideRelatedPrograms)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
      $this->HideRelatedPrograms = $HideRelatedPrograms;
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
     * @return \Mindbody\Service\SaleService\GetServicesRequest
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
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getServiceIDs()
    {
      return $this->ServiceIDs;
    }

    /**
     * @param ArrayOfString $ServiceIDs
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setServiceIDs($ServiceIDs)
    {
      $this->ServiceIDs = $ServiceIDs;
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
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassScheduleID()
    {
      return $this->ClassScheduleID;
    }

    /**
     * @param int $ClassScheduleID
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setClassScheduleID($ClassScheduleID)
    {
      $this->ClassScheduleID = $ClassScheduleID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellOnline()
    {
      return $this->SellOnline;
    }

    /**
     * @param boolean $SellOnline
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setSellOnline($SellOnline)
    {
      $this->SellOnline = $SellOnline;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideRelatedPrograms()
    {
      return $this->HideRelatedPrograms;
    }

    /**
     * @param boolean $HideRelatedPrograms
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setHideRelatedPrograms($HideRelatedPrograms)
    {
      $this->HideRelatedPrograms = $HideRelatedPrograms;
      return $this;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseOnlineStoreTaxRate()
    {
      return $this->UseOnlineStoreTaxRate;
    }

    /**
     * @param boolean $UseOnlineStoreTaxRate
     * @return \Mindbody\Service\SaleService\GetServicesRequest
     */
    public function setUseOnlineStoreTaxRate($UseOnlineStoreTaxRate)
    {
      $this->UseOnlineStoreTaxRate = $UseOnlineStoreTaxRate;
      return $this;
    }

}
