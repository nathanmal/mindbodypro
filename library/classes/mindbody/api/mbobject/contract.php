<?php

namespace Mindbody\API\MBObject;

use \Mindbody\API\Common\MBObject;


class Contract extends MBObject
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
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $AssignsMembershipId
     */
    protected $AssignsMembershipId = null;

    /**
     * @var string $AssignsMembershipName
     */
    protected $AssignsMembershipName = null;

    /**
     * @var boolean $SoldOnline
     */
    protected $SoldOnline = null;

    /**
     * @var ArrayOfContractItem $ContractItems
     */
    protected $ContractItems = null;

    /**
     * @var string $IntroOffer
     */
    protected $IntroOffer = null;

    /**
     * @var AutopaySchedule $AutopaySchedule
     */
    protected $AutopaySchedule = null;

    /**
     * @var int $NumberOfAutopays
     */
    protected $NumberOfAutopays = null;

    /**
     * @var string $AutopayTriggerType
     */
    protected $AutopayTriggerType = null;

    /**
     * @var string $ActionUponCompletionOfAutopays
     */
    protected $ActionUponCompletionOfAutopays = null;

    /**
     * @var string $ClientsChargedOn
     */
    protected $ClientsChargedOn = null;

    /**
     * @var \DateTime $ClientsChargedOnSpecificDate
     */
    protected $ClientsChargedOnSpecificDate = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var float $DepositAmount
     */
    protected $DepositAmount = null;

    /**
     * @var boolean $FirstAutopayFree
     */
    protected $FirstAutopayFree = null;

    /**
     * @var boolean $LastAutopayFree
     */
    protected $LastAutopayFree = null;

    /**
     * @var boolean $ClientTerminateOnline
     */
    protected $ClientTerminateOnline = null;

    /**
     * @var ArrayOfMembershipTypeRestriction $MembershipTypeRestrictions
     */
    protected $MembershipTypeRestrictions = null;

    /**
     * @var ArrayOfInt $LocationPurchaseRestrictionIds
     */
    protected $LocationPurchaseRestrictionIds = null;

    /**
     * @var string $AgreementTerms
     */
    protected $AgreementTerms = null;

    /**
     * @var boolean $RequiresElectronicConfirmation
     */
    protected $RequiresElectronicConfirmation = null;

    /**
     * @var boolean $AutopayEnabled
     */
    protected $AutopayEnabled = null;

    /**
     * @var float $FirstPaymentAmountSubtotal
     */
    protected $FirstPaymentAmountSubtotal = null;

    /**
     * @var float $FirstPaymentAmountTax
     */
    protected $FirstPaymentAmountTax = null;

    /**
     * @var float $FirstPaymentAmountTotal
     */
    protected $FirstPaymentAmountTotal = null;

    /**
     * @var float $RecurringPaymentAmountSubtotal
     */
    protected $RecurringPaymentAmountSubtotal = null;

    /**
     * @var float $RecurringPaymentAmountTax
     */
    protected $RecurringPaymentAmountTax = null;

    /**
     * @var float $RecurringPaymentAmountTotal
     */
    protected $RecurringPaymentAmountTotal = null;

    /**
     * @var float $TotalContractAmountSubtotal
     */
    protected $TotalContractAmountSubtotal = null;

    /**
     * @var float $TotalContractAmountTax
     */
    protected $TotalContractAmountTax = null;

    /**
     * @var float $TotalContractAmountTotal
     */
    protected $TotalContractAmountTotal = null;

    /**
     * @param boolean $SoldOnline
     * @param float $DiscountAmount
     * @param float $DepositAmount
     * @param boolean $FirstAutopayFree
     * @param boolean $LastAutopayFree
     * @param boolean $ClientTerminateOnline
     * @param boolean $RequiresElectronicConfirmation
     * @param boolean $AutopayEnabled
     * @param float $FirstPaymentAmountSubtotal
     * @param float $FirstPaymentAmountTax
     * @param float $FirstPaymentAmountTotal
     * @param float $RecurringPaymentAmountSubtotal
     * @param float $RecurringPaymentAmountTax
     * @param float $RecurringPaymentAmountTotal
     * @param float $TotalContractAmountSubtotal
     * @param float $TotalContractAmountTax
     * @param float $TotalContractAmountTotal
     */
    public function __construct($SoldOnline, $DiscountAmount, $DepositAmount, $FirstAutopayFree, $LastAutopayFree, $ClientTerminateOnline, $RequiresElectronicConfirmation, $AutopayEnabled, $FirstPaymentAmountSubtotal, $FirstPaymentAmountTax, $FirstPaymentAmountTotal, $RecurringPaymentAmountSubtotal, $RecurringPaymentAmountTax, $RecurringPaymentAmountTotal, $TotalContractAmountSubtotal, $TotalContractAmountTax, $TotalContractAmountTotal)
    {
      parent::__construct();
      $this->SoldOnline = $SoldOnline;
      $this->DiscountAmount = $DiscountAmount;
      $this->DepositAmount = $DepositAmount;
      $this->FirstAutopayFree = $FirstAutopayFree;
      $this->LastAutopayFree = $LastAutopayFree;
      $this->ClientTerminateOnline = $ClientTerminateOnline;
      $this->RequiresElectronicConfirmation = $RequiresElectronicConfirmation;
      $this->AutopayEnabled = $AutopayEnabled;
      $this->FirstPaymentAmountSubtotal = $FirstPaymentAmountSubtotal;
      $this->FirstPaymentAmountTax = $FirstPaymentAmountTax;
      $this->FirstPaymentAmountTotal = $FirstPaymentAmountTotal;
      $this->RecurringPaymentAmountSubtotal = $RecurringPaymentAmountSubtotal;
      $this->RecurringPaymentAmountTax = $RecurringPaymentAmountTax;
      $this->RecurringPaymentAmountTotal = $RecurringPaymentAmountTotal;
      $this->TotalContractAmountSubtotal = $TotalContractAmountSubtotal;
      $this->TotalContractAmountTax = $TotalContractAmountTax;
      $this->TotalContractAmountTotal = $TotalContractAmountTotal;
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
     * @return \Mindbody\Service\SaleService\Contract
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
     * @return \Mindbody\Service\SaleService\Contract
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
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssignsMembershipId()
    {
      return $this->AssignsMembershipId;
    }

    /**
     * @param int $AssignsMembershipId
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAssignsMembershipId($AssignsMembershipId)
    {
      $this->AssignsMembershipId = $AssignsMembershipId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssignsMembershipName()
    {
      return $this->AssignsMembershipName;
    }

    /**
     * @param string $AssignsMembershipName
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAssignsMembershipName($AssignsMembershipName)
    {
      $this->AssignsMembershipName = $AssignsMembershipName;
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
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setSoldOnline($SoldOnline)
    {
      $this->SoldOnline = $SoldOnline;
      return $this;
    }

    /**
     * @return ArrayOfContractItem
     */
    public function getContractItems()
    {
      return $this->ContractItems;
    }

    /**
     * @param ArrayOfContractItem $ContractItems
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setContractItems($ContractItems)
    {
      $this->ContractItems = $ContractItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntroOffer()
    {
      return $this->IntroOffer;
    }

    /**
     * @param string $IntroOffer
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setIntroOffer($IntroOffer)
    {
      $this->IntroOffer = $IntroOffer;
      return $this;
    }

    /**
     * @return AutopaySchedule
     */
    public function getAutopaySchedule()
    {
      return $this->AutopaySchedule;
    }

    /**
     * @param AutopaySchedule $AutopaySchedule
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAutopaySchedule($AutopaySchedule)
    {
      $this->AutopaySchedule = $AutopaySchedule;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAutopays()
    {
      return $this->NumberOfAutopays;
    }

    /**
     * @param int $NumberOfAutopays
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setNumberOfAutopays($NumberOfAutopays)
    {
      $this->NumberOfAutopays = $NumberOfAutopays;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutopayTriggerType()
    {
      return $this->AutopayTriggerType;
    }

    /**
     * @param string $AutopayTriggerType
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAutopayTriggerType($AutopayTriggerType)
    {
      $this->AutopayTriggerType = $AutopayTriggerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionUponCompletionOfAutopays()
    {
      return $this->ActionUponCompletionOfAutopays;
    }

    /**
     * @param string $ActionUponCompletionOfAutopays
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setActionUponCompletionOfAutopays($ActionUponCompletionOfAutopays)
    {
      $this->ActionUponCompletionOfAutopays = $ActionUponCompletionOfAutopays;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientsChargedOn()
    {
      return $this->ClientsChargedOn;
    }

    /**
     * @param string $ClientsChargedOn
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setClientsChargedOn($ClientsChargedOn)
    {
      $this->ClientsChargedOn = $ClientsChargedOn;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClientsChargedOnSpecificDate()
    {
      if ($this->ClientsChargedOnSpecificDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ClientsChargedOnSpecificDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ClientsChargedOnSpecificDate
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setClientsChargedOnSpecificDate(\DateTime $ClientsChargedOnSpecificDate = null)
    {
      if ($ClientsChargedOnSpecificDate == null) {
       $this->ClientsChargedOnSpecificDate = null;
      } else {
        $this->ClientsChargedOnSpecificDate = $ClientsChargedOnSpecificDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmount
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param float $DepositAmount
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirstAutopayFree()
    {
      return $this->FirstAutopayFree;
    }

    /**
     * @param boolean $FirstAutopayFree
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setFirstAutopayFree($FirstAutopayFree)
    {
      $this->FirstAutopayFree = $FirstAutopayFree;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLastAutopayFree()
    {
      return $this->LastAutopayFree;
    }

    /**
     * @param boolean $LastAutopayFree
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setLastAutopayFree($LastAutopayFree)
    {
      $this->LastAutopayFree = $LastAutopayFree;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClientTerminateOnline()
    {
      return $this->ClientTerminateOnline;
    }

    /**
     * @param boolean $ClientTerminateOnline
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setClientTerminateOnline($ClientTerminateOnline)
    {
      $this->ClientTerminateOnline = $ClientTerminateOnline;
      return $this;
    }

    /**
     * @return ArrayOfMembershipTypeRestriction
     */
    public function getMembershipTypeRestrictions()
    {
      return $this->MembershipTypeRestrictions;
    }

    /**
     * @param ArrayOfMembershipTypeRestriction $MembershipTypeRestrictions
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setMembershipTypeRestrictions($MembershipTypeRestrictions)
    {
      $this->MembershipTypeRestrictions = $MembershipTypeRestrictions;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationPurchaseRestrictionIds()
    {
      return $this->LocationPurchaseRestrictionIds;
    }

    /**
     * @param ArrayOfInt $LocationPurchaseRestrictionIds
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setLocationPurchaseRestrictionIds($LocationPurchaseRestrictionIds)
    {
      $this->LocationPurchaseRestrictionIds = $LocationPurchaseRestrictionIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgreementTerms()
    {
      return $this->AgreementTerms;
    }

    /**
     * @param string $AgreementTerms
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAgreementTerms($AgreementTerms)
    {
      $this->AgreementTerms = $AgreementTerms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiresElectronicConfirmation()
    {
      return $this->RequiresElectronicConfirmation;
    }

    /**
     * @param boolean $RequiresElectronicConfirmation
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setRequiresElectronicConfirmation($RequiresElectronicConfirmation)
    {
      $this->RequiresElectronicConfirmation = $RequiresElectronicConfirmation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutopayEnabled()
    {
      return $this->AutopayEnabled;
    }

    /**
     * @param boolean $AutopayEnabled
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setAutopayEnabled($AutopayEnabled)
    {
      $this->AutopayEnabled = $AutopayEnabled;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountSubtotal()
    {
      return $this->FirstPaymentAmountSubtotal;
    }

    /**
     * @param float $FirstPaymentAmountSubtotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setFirstPaymentAmountSubtotal($FirstPaymentAmountSubtotal)
    {
      $this->FirstPaymentAmountSubtotal = $FirstPaymentAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountTax()
    {
      return $this->FirstPaymentAmountTax;
    }

    /**
     * @param float $FirstPaymentAmountTax
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setFirstPaymentAmountTax($FirstPaymentAmountTax)
    {
      $this->FirstPaymentAmountTax = $FirstPaymentAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstPaymentAmountTotal()
    {
      return $this->FirstPaymentAmountTotal;
    }

    /**
     * @param float $FirstPaymentAmountTotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setFirstPaymentAmountTotal($FirstPaymentAmountTotal)
    {
      $this->FirstPaymentAmountTotal = $FirstPaymentAmountTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountSubtotal()
    {
      return $this->RecurringPaymentAmountSubtotal;
    }

    /**
     * @param float $RecurringPaymentAmountSubtotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setRecurringPaymentAmountSubtotal($RecurringPaymentAmountSubtotal)
    {
      $this->RecurringPaymentAmountSubtotal = $RecurringPaymentAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountTax()
    {
      return $this->RecurringPaymentAmountTax;
    }

    /**
     * @param float $RecurringPaymentAmountTax
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setRecurringPaymentAmountTax($RecurringPaymentAmountTax)
    {
      $this->RecurringPaymentAmountTax = $RecurringPaymentAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurringPaymentAmountTotal()
    {
      return $this->RecurringPaymentAmountTotal;
    }

    /**
     * @param float $RecurringPaymentAmountTotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setRecurringPaymentAmountTotal($RecurringPaymentAmountTotal)
    {
      $this->RecurringPaymentAmountTotal = $RecurringPaymentAmountTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountSubtotal()
    {
      return $this->TotalContractAmountSubtotal;
    }

    /**
     * @param float $TotalContractAmountSubtotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setTotalContractAmountSubtotal($TotalContractAmountSubtotal)
    {
      $this->TotalContractAmountSubtotal = $TotalContractAmountSubtotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountTax()
    {
      return $this->TotalContractAmountTax;
    }

    /**
     * @param float $TotalContractAmountTax
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setTotalContractAmountTax($TotalContractAmountTax)
    {
      $this->TotalContractAmountTax = $TotalContractAmountTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalContractAmountTotal()
    {
      return $this->TotalContractAmountTotal;
    }

    /**
     * @param float $TotalContractAmountTotal
     * @return \Mindbody\Service\SaleService\Contract
     */
    public function setTotalContractAmountTotal($TotalContractAmountTotal)
    {
      $this->TotalContractAmountTotal = $TotalContractAmountTotal;
      return $this;
    }

}
