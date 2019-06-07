<?php

namespace Mindbody\Service\ClassService;

class SalesRep extends MBObject
{

    /**
     * @var int $SalesRepNumber
     */
    protected $SalesRepNumber = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var ArrayOfInt $SalesRepNumbers
     */
    protected $SalesRepNumbers = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getSalesRepNumber()
    {
      return $this->SalesRepNumber;
    }

    /**
     * @param int $SalesRepNumber
     * @return \Mindbody\Service\ClassService\SalesRep
     */
    public function setSalesRepNumber($SalesRepNumber)
    {
      $this->SalesRepNumber = $SalesRepNumber;
      return $this;
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
     * @return \Mindbody\Service\ClassService\SalesRep
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Mindbody\Service\ClassService\SalesRep
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Mindbody\Service\ClassService\SalesRep
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSalesRepNumbers()
    {
      return $this->SalesRepNumbers;
    }

    /**
     * @param ArrayOfInt $SalesRepNumbers
     * @return \Mindbody\Service\ClassService\SalesRep
     */
    public function setSalesRepNumbers($SalesRepNumbers)
    {
      $this->SalesRepNumbers = $SalesRepNumbers;
      return $this;
    }

}
