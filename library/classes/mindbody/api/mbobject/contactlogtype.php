<?php

namespace Mindbody\API\MBObject;

use \Mindbody\API\Common\MBObject;


class ContactLogType extends MBObject
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
     * @var ArrayOfContactLogSubtype $Subtypes
     */
    protected $Subtypes = null;

    
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
     * @return \Mindbody\Service\ClientService\ContactLogType
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
     * @return \Mindbody\Service\ClientService\ContactLogType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfContactLogSubtype
     */
    public function getSubtypes()
    {
      return $this->Subtypes;
    }

    /**
     * @param ArrayOfContactLogSubtype $Subtypes
     * @return \Mindbody\Service\ClientService\ContactLogType
     */
    public function setSubtypes($Subtypes)
    {
      $this->Subtypes = $Subtypes;
      return $this;
    }

}
