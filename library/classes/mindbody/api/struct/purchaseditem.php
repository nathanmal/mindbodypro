<?php

namespace Mindbody\API\Struct;

class PurchasedItem
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var boolean $IsService
     */
    protected $IsService = null;

    /**
     * @param int $ID
     * @param boolean $IsService
     */
    public function __construct($ID, $IsService)
    {
      $this->ID = $ID;
      $this->IsService = $IsService;
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
     * @return \Mindbody\Service\ClientService\PurchasedItem
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsService()
    {
      return $this->IsService;
    }

    /**
     * @param boolean $IsService
     * @return \Mindbody\Service\ClientService\PurchasedItem
     */
    public function setIsService($IsService)
    {
      $this->IsService = $IsService;
      return $this;
    }

}
