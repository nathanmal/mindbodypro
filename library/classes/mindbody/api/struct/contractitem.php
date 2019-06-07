<?php

namespace Mindbody\API\Struct;

class ContractItem
{

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var boolean $OneTimeItem
     */
    protected $OneTimeItem = null;

    /**
     * @param float $Price
     * @param int $Quantity
     * @param boolean $OneTimeItem
     */
    public function __construct($Price, $Quantity, $OneTimeItem)
    {
      $this->Price = $Price;
      $this->Quantity = $Quantity;
      $this->OneTimeItem = $OneTimeItem;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \Mindbody\Service\SaleService\ContractItem
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
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOneTimeItem()
    {
      return $this->OneTimeItem;
    }

    /**
     * @param boolean $OneTimeItem
     * @return \Mindbody\Service\SaleService\ContractItem
     */
    public function setOneTimeItem($OneTimeItem)
    {
      $this->OneTimeItem = $OneTimeItem;
      return $this;
    }

}
