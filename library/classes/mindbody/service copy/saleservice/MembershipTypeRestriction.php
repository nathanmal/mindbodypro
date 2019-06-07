<?php

namespace Mindbody\Service\SaleService;

class MembershipTypeRestriction extends MBObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
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
     * @return \Mindbody\Service\SaleService\MembershipTypeRestriction
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Mindbody\Service\SaleService\MembershipTypeRestriction
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
