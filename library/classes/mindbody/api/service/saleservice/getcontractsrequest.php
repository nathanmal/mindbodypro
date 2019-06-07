<?php

namespace Mindbody\API\Service\SaleService;

class GetContractsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfInt $ContractIDs
     */
    protected $ContractIDs = null;

    /**
     * @var boolean $SoldOnline
     */
    protected $SoldOnline = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @param int $LocationID
     */
    public function __construct($LocationID)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
    }

    /**
     * @return ArrayOfInt
     */
    public function getContractIDs()
    {
      return $this->ContractIDs;
    }

    /**
     * @param ArrayOfInt $ContractIDs
     * @return \Mindbody\Service\SaleService\GetContractsRequest
     */
    public function setContractIDs($ContractIDs)
    {
      $this->ContractIDs = $ContractIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOnline()
    {
      return $this->SoldOnline;
    }

    /**
     * @param boolean $SoldOnline
     * @return \Mindbody\Service\SaleService\GetContractsRequest
     */
    public function setSoldOnline($SoldOnline)
    {
      $this->SoldOnline = $SoldOnline;
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
     * @return \Mindbody\Service\SaleService\GetContractsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
