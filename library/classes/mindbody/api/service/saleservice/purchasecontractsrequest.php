<?php

namespace Mindbody\API\Service\SaleService;

class PurchaseContractsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $ContractID
     */
    protected $ContractID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $FirstPaymentOccurs
     */
    protected $FirstPaymentOccurs = null;

    /**
     * @var base64Binary $ClientSignature
     */
    protected $ClientSignature = null;

    /**
     * @var string $PromotionCode
     */
    protected $PromotionCode = null;

    /**
     * @var PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var boolean $SendNotifications
     */
    protected $SendNotifications = null;

    /**
     * @param int $LocationID
     * @param int $ContractID
     * @param boolean $SendNotifications
     */
    public function __construct($LocationID, $ContractID, $SendNotifications)
    {
      parent::__construct();
      $this->LocationID = $LocationID;
      $this->ContractID = $ContractID;
      $this->SendNotifications = $SendNotifications;
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
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
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
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractID()
    {
      return $this->ContractID;
    }

    /**
     * @param int $ContractID
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setContractID($ContractID)
    {
      $this->ContractID = $ContractID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstPaymentOccurs()
    {
      return $this->FirstPaymentOccurs;
    }

    /**
     * @param string $FirstPaymentOccurs
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setFirstPaymentOccurs($FirstPaymentOccurs)
    {
      $this->FirstPaymentOccurs = $FirstPaymentOccurs;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getClientSignature()
    {
      return $this->ClientSignature;
    }

    /**
     * @param base64Binary $ClientSignature
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setClientSignature($ClientSignature)
    {
      $this->ClientSignature = $ClientSignature;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param string $PromotionCode
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendNotifications()
    {
      return $this->SendNotifications;
    }

    /**
     * @param boolean $SendNotifications
     * @return \Mindbody\Service\SaleService\PurchaseContractsRequest
     */
    public function setSendNotifications($SendNotifications)
    {
      $this->SendNotifications = $SendNotifications;
      return $this;
    }

}
