<?php

namespace Mindbody\Service\SaleService;

class Sale
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var \DateTime $SaleTime
     */
    protected $SaleTime = null;

    /**
     * @var \DateTime $SaleDate
     */
    protected $SaleDate = null;

    /**
     * @var \DateTime $SaleDateTime
     */
    protected $SaleDateTime = null;

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var ArrayOfPurchasedItem $PurchasedItems
     */
    protected $PurchasedItems = null;

    /**
     * @var Location $Location
     */
    protected $Location = null;

    /**
     * @var ArrayOfPayment $Payments
     */
    protected $Payments = null;

    /**
     * @param int $ID
     * @param \DateTime $SaleTime
     * @param \DateTime $SaleDate
     * @param \DateTime $SaleDateTime
     */
    public function __construct($ID, \DateTime $SaleTime, \DateTime $SaleDate, \DateTime $SaleDateTime)
    {
      $this->ID = $ID;
      $this->SaleTime = $SaleTime->format(\DateTime::ATOM);
      $this->SaleDate = $SaleDate->format(\DateTime::ATOM);
      $this->SaleDateTime = $SaleDateTime->format(\DateTime::ATOM);
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
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleTime()
    {
      if ($this->SaleTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SaleTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SaleTime
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setSaleTime(\DateTime $SaleTime)
    {
      $this->SaleTime = $SaleTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDate()
    {
      if ($this->SaleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SaleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SaleDate
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setSaleDate(\DateTime $SaleDate)
    {
      $this->SaleDate = $SaleDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDateTime()
    {
      if ($this->SaleDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SaleDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SaleDateTime
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setSaleDateTime(\DateTime $SaleDateTime)
    {
      $this->SaleDateTime = $SaleDateTime->format(\DateTime::ATOM);
      return $this;
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
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return ArrayOfPurchasedItem
     */
    public function getPurchasedItems()
    {
      return $this->PurchasedItems;
    }

    /**
     * @param ArrayOfPurchasedItem $PurchasedItems
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setPurchasedItems($PurchasedItems)
    {
      $this->PurchasedItems = $PurchasedItems;
      return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param Location $Location
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return ArrayOfPayment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfPayment $Payments
     * @return \Mindbody\Service\SaleService\Sale
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

}
