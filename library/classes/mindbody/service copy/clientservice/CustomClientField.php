<?php

namespace Mindbody\Service\ClientService;

class CustomClientField
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $DataType
     */
    protected $DataType = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
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
     * @return \Mindbody\Service\ClientService\CustomClientField
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param string $DataType
     * @return \Mindbody\Service\ClientService\CustomClientField
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
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
     * @return \Mindbody\Service\ClientService\CustomClientField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Mindbody\Service\ClientService\CustomClientField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
