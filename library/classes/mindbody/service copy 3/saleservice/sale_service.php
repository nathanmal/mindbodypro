<?php

namespace Mindbody\Service\SaleService;


/**
 * Provides methods and attributes relating to sales.
 */
class Sale_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetAcceptedCardType' => 'Mindbody\\Service\\SaleService\\GetAcceptedCardType',
      'GetAcceptedCardTypeRequest' => 'Mindbody\\Service\\SaleService\\GetAcceptedCardTypeRequest',
      'MBRequest' => 'Mindbody\\Service\\SaleService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\SaleService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\SaleService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\SaleService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\SaleService\\ArrayOfString',
      'GetAcceptedCardTypeResponse' => 'Mindbody\\Service\\SaleService\\GetAcceptedCardTypeResponse',
      'GetAcceptedCardTypeResult' => 'Mindbody\\Service\\SaleService\\GetAcceptedCardTypeResult',
      'MBResult' => 'Mindbody\\Service\\SaleService\\MBResult',
      'CheckoutShoppingCart' => 'Mindbody\\Service\\SaleService\\CheckoutShoppingCart',
      'CheckoutShoppingCartRequest' => 'Mindbody\\Service\\SaleService\\CheckoutShoppingCartRequest',
      'ArrayOfCartItem' => 'Mindbody\\Service\\SaleService\\ArrayOfCartItem',
      'CartItem' => 'Mindbody\\Service\\SaleService\\CartItem',
      'MBObject' => 'Mindbody\\Service\\SaleService\\MBObject',
      'Site' => 'Mindbody\\Service\\SaleService\\Site',
      'ClassSchedule' => 'Mindbody\\Service\\SaleService\\ClassSchedule',
      'ArrayOfClass' => 'Mindbody\\Service\\SaleService\\ArrayOfClass',
      'Class' => 'Mindbody\\Service\\SaleService\\ClassCustom',
      'ArrayOfVisit' => 'Mindbody\\Service\\SaleService\\ArrayOfVisit',
      'Visit' => 'Mindbody\\Service\\SaleService\\Visit',
      'Staff' => 'Mindbody\\Service\\SaleService\\Staff',
      'ArrayOfAppointment' => 'Mindbody\\Service\\SaleService\\ArrayOfAppointment',
      'Appointment' => 'Mindbody\\Service\\SaleService\\Appointment',
      'ScheduleItem' => 'Mindbody\\Service\\SaleService\\ScheduleItem',
      'Unavailability' => 'Mindbody\\Service\\SaleService\\Unavailability',
      'Availability' => 'Mindbody\\Service\\SaleService\\Availability',
      'SessionType' => 'Mindbody\\Service\\SaleService\\SessionType',
      'ArrayOfProgram' => 'Mindbody\\Service\\SaleService\\ArrayOfProgram',
      'Program' => 'Mindbody\\Service\\SaleService\\Program',
      'Location' => 'Mindbody\\Service\\SaleService\\Location',
      'Client' => 'Mindbody\\Service\\SaleService\\Client',
      'ArrayOfClientIndex' => 'Mindbody\\Service\\SaleService\\ArrayOfClientIndex',
      'ClientIndex' => 'Mindbody\\Service\\SaleService\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Mindbody\\Service\\SaleService\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Mindbody\\Service\\SaleService\\ClientIndexValue',
      'ClientCreditCard' => 'Mindbody\\Service\\SaleService\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Mindbody\\Service\\SaleService\\ArrayOfClientRelationship',
      'ClientRelationship' => 'Mindbody\\Service\\SaleService\\ClientRelationship',
      'Relationship' => 'Mindbody\\Service\\SaleService\\Relationship',
      'ArrayOfRep' => 'Mindbody\\Service\\SaleService\\ArrayOfRep',
      'Rep' => 'Mindbody\\Service\\SaleService\\Rep',
      'ArrayOfSalesRep' => 'Mindbody\\Service\\SaleService\\ArrayOfSalesRep',
      'SalesRep' => 'Mindbody\\Service\\SaleService\\SalesRep',
      'ArrayOfCustomClientField' => 'Mindbody\\Service\\SaleService\\ArrayOfCustomClientField',
      'CustomClientField' => 'Mindbody\\Service\\SaleService\\CustomClientField',
      'Liability' => 'Mindbody\\Service\\SaleService\\Liability',
      'ProspectStage' => 'Mindbody\\Service\\SaleService\\ProspectStage',
      'ClientService' => 'Mindbody\\Service\\SaleService\\ClientService',
      'ArrayOfResource' => 'Mindbody\\Service\\SaleService\\ArrayOfResource',
      'Resource' => 'Mindbody\\Service\\SaleService\\Resource',
      'ArrayOfUnavailability' => 'Mindbody\\Service\\SaleService\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Mindbody\\Service\\SaleService\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Mindbody\\Service\\SaleService\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Mindbody\\Service\\SaleService\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Mindbody\\Service\\SaleService\\ProviderIDUpdate',
      'ArrayOfClient' => 'Mindbody\\Service\\SaleService\\ArrayOfClient',
      'ClassDescription' => 'Mindbody\\Service\\SaleService\\ClassDescription',
      'Level' => 'Mindbody\\Service\\SaleService\\Level',
      'Course' => 'Mindbody\\Service\\SaleService\\Course',
      'ShoppingCart' => 'Mindbody\\Service\\SaleService\\ShoppingCart',
      'Size' => 'Mindbody\\Service\\SaleService\\Size',
      'Color' => 'Mindbody\\Service\\SaleService\\Color',
      'Item' => 'Mindbody\\Service\\SaleService\\Item',
      'Tip' => 'Mindbody\\Service\\SaleService\\Tip',
      'Package' => 'Mindbody\\Service\\SaleService\\Package',
      'ArrayOfService' => 'Mindbody\\Service\\SaleService\\ArrayOfService',
      'Service' => 'Mindbody\\Service\\SaleService\\Service',
      'ArrayOfProduct' => 'Mindbody\\Service\\SaleService\\ArrayOfProduct',
      'Product' => 'Mindbody\\Service\\SaleService\\Product',
      'ArrayOfLong' => 'Mindbody\\Service\\SaleService\\ArrayOfLong',
      'ArrayOfPaymentInfo' => 'Mindbody\\Service\\SaleService\\ArrayOfPaymentInfo',
      'PaymentInfo' => 'Mindbody\\Service\\SaleService\\PaymentInfo',
      'GiftCardInfo' => 'Mindbody\\Service\\SaleService\\GiftCardInfo',
      'CheckInfo' => 'Mindbody\\Service\\SaleService\\CheckInfo',
      'CashInfo' => 'Mindbody\\Service\\SaleService\\CashInfo',
      'CompInfo' => 'Mindbody\\Service\\SaleService\\CompInfo',
      'TrackDataInfo' => 'Mindbody\\Service\\SaleService\\TrackDataInfo',
      'StoredCardInfo' => 'Mindbody\\Service\\SaleService\\StoredCardInfo',
      'EncryptedTrackDataInfo' => 'Mindbody\\Service\\SaleService\\EncryptedTrackDataInfo',
      'CustomPaymentInfo' => 'Mindbody\\Service\\SaleService\\CustomPaymentInfo',
      'DebitAccountInfo' => 'Mindbody\\Service\\SaleService\\DebitAccountInfo',
      'CreditCardInfo' => 'Mindbody\\Service\\SaleService\\CreditCardInfo',
      'CheckoutShoppingCartResponse' => 'Mindbody\\Service\\SaleService\\CheckoutShoppingCartResponse',
      'CheckoutShoppingCartResult' => 'Mindbody\\Service\\SaleService\\CheckoutShoppingCartResult',
      'ArrayOfClassSchedule' => 'Mindbody\\Service\\SaleService\\ArrayOfClassSchedule',
      'GetSales' => 'Mindbody\\Service\\SaleService\\GetSales',
      'GetSalesRequest' => 'Mindbody\\Service\\SaleService\\GetSalesRequest',
      'GetSalesResponse' => 'Mindbody\\Service\\SaleService\\GetSalesResponse',
      'GetSalesResult' => 'Mindbody\\Service\\SaleService\\GetSalesResult',
      'ArrayOfSale' => 'Mindbody\\Service\\SaleService\\ArrayOfSale',
      'Sale' => 'Mindbody\\Service\\SaleService\\Sale',
      'ArrayOfPurchasedItem' => 'Mindbody\\Service\\SaleService\\ArrayOfPurchasedItem',
      'PurchasedItem' => 'Mindbody\\Service\\SaleService\\PurchasedItem',
      'ArrayOfPayment' => 'Mindbody\\Service\\SaleService\\ArrayOfPayment',
      'Payment' => 'Mindbody\\Service\\SaleService\\Payment',
      'GetServices' => 'Mindbody\\Service\\SaleService\\GetServices',
      'GetServicesRequest' => 'Mindbody\\Service\\SaleService\\GetServicesRequest',
      'GetServicesResponse' => 'Mindbody\\Service\\SaleService\\GetServicesResponse',
      'GetServicesResult' => 'Mindbody\\Service\\SaleService\\GetServicesResult',
      'UpdateServices' => 'Mindbody\\Service\\SaleService\\UpdateServices',
      'UpdateServicesRequest' => 'Mindbody\\Service\\SaleService\\UpdateServicesRequest',
      'UpdateServicesResponse' => 'Mindbody\\Service\\SaleService\\UpdateServicesResponse',
      'UpdateServicesResult' => 'Mindbody\\Service\\SaleService\\UpdateServicesResult',
      'GetPackages' => 'Mindbody\\Service\\SaleService\\GetPackages',
      'GetPackagesRequest' => 'Mindbody\\Service\\SaleService\\GetPackagesRequest',
      'GetPackagesResponse' => 'Mindbody\\Service\\SaleService\\GetPackagesResponse',
      'GetPackagesResult' => 'Mindbody\\Service\\SaleService\\GetPackagesResult',
      'ArrayOfPackage' => 'Mindbody\\Service\\SaleService\\ArrayOfPackage',
      'GetProducts' => 'Mindbody\\Service\\SaleService\\GetProducts',
      'GetProductsRequest' => 'Mindbody\\Service\\SaleService\\GetProductsRequest',
      'GetProductsResponse' => 'Mindbody\\Service\\SaleService\\GetProductsResponse',
      'GetProductsResult' => 'Mindbody\\Service\\SaleService\\GetProductsResult',
      'UpdateProducts' => 'Mindbody\\Service\\SaleService\\UpdateProducts',
      'UpdateProductsRequest' => 'Mindbody\\Service\\SaleService\\UpdateProductsRequest',
      'UpdateProductsResponse' => 'Mindbody\\Service\\SaleService\\UpdateProductsResponse',
      'UpdateProductsResult' => 'Mindbody\\Service\\SaleService\\UpdateProductsResult',
      'RedeemSpaFinderWellnessCard' => 'Mindbody\\Service\\SaleService\\RedeemSpaFinderWellnessCard',
      'RedeemSpaFinderWellnessCardRequest' => 'Mindbody\\Service\\SaleService\\RedeemSpaFinderWellnessCardRequest',
      'RedeemSpaFinderWellnessCardResponse' => 'Mindbody\\Service\\SaleService\\RedeemSpaFinderWellnessCardResponse',
      'RedeemSpaFinderWellnessCardResult' => 'Mindbody\\Service\\SaleService\\RedeemSpaFinderWellnessCardResult',
      'GetCustomPaymentMethods' => 'Mindbody\\Service\\SaleService\\GetCustomPaymentMethods',
      'GetCustomPaymentMethodsRequest' => 'Mindbody\\Service\\SaleService\\GetCustomPaymentMethodsRequest',
      'GetCustomPaymentMethodsResponse' => 'Mindbody\\Service\\SaleService\\GetCustomPaymentMethodsResponse',
      'GetCustomPaymentMethodsResult' => 'Mindbody\\Service\\SaleService\\GetCustomPaymentMethodsResult',
      'ArrayOfCustomPaymentInfo' => 'Mindbody\\Service\\SaleService\\ArrayOfCustomPaymentInfo',
      'ReturnSale' => 'Mindbody\\Service\\SaleService\\ReturnSale',
      'ReturnSaleRequest' => 'Mindbody\\Service\\SaleService\\ReturnSaleRequest',
      'ReturnSaleResponse' => 'Mindbody\\Service\\SaleService\\ReturnSaleResponse',
      'ReturnSaleResult' => 'Mindbody\\Service\\SaleService\\ReturnSaleResult',
      'UpdateSaleDate' => 'Mindbody\\Service\\SaleService\\UpdateSaleDate',
      'UpdateSaleDateRequest' => 'Mindbody\\Service\\SaleService\\UpdateSaleDateRequest',
      'UpdateSaleDateResponse' => 'Mindbody\\Service\\SaleService\\UpdateSaleDateResponse',
      'UpdateSaleDateResult' => 'Mindbody\\Service\\SaleService\\UpdateSaleDateResult',
      'GetContracts' => 'Mindbody\\Service\\SaleService\\GetContracts',
      'GetContractsRequest' => 'Mindbody\\Service\\SaleService\\GetContractsRequest',
      'GetContractsResponse' => 'Mindbody\\Service\\SaleService\\GetContractsResponse',
      'GetContractsResult' => 'Mindbody\\Service\\SaleService\\GetContractsResult',
      'ArrayOfContract' => 'Mindbody\\Service\\SaleService\\ArrayOfContract',
      'Contract' => 'Mindbody\\Service\\SaleService\\Contract',
      'ArrayOfContractItem' => 'Mindbody\\Service\\SaleService\\ArrayOfContractItem',
      'ContractItem' => 'Mindbody\\Service\\SaleService\\ContractItem',
      'AutopaySchedule' => 'Mindbody\\Service\\SaleService\\AutopaySchedule',
      'ArrayOfMembershipTypeRestriction' => 'Mindbody\\Service\\SaleService\\ArrayOfMembershipTypeRestriction',
      'MembershipTypeRestriction' => 'Mindbody\\Service\\SaleService\\MembershipTypeRestriction',
      'PurchaseContracts' => 'Mindbody\\Service\\SaleService\\PurchaseContracts',
      'PurchaseContractsRequest' => 'Mindbody\\Service\\SaleService\\PurchaseContractsRequest',
      'PurchaseContractsResponse' => 'Mindbody\\Service\\SaleService\\PurchaseContractsResponse',
      'PurchaseContractsResult' => 'Mindbody\\Service\\SaleService\\PurchaseContractsResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'soap_version' => 1,
      'trace' => 1,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of card types that the site accepts.
     *
     * @param GetAcceptedCardType $parameters
     * @return GetAcceptedCardTypeResponse
     */
    public function GetAcceptedCardType(GetAcceptedCardType $parameters)
    {
      return $this->__soapCall('GetAcceptedCardType', array($parameters));
    }

    /**
     * Validates and completes a sale by processing all items added to a shopping cart.
     *
     * @param CheckoutShoppingCart $parameters
     * @return CheckoutShoppingCartResponse
     */
    public function CheckoutShoppingCart(CheckoutShoppingCart $parameters)
    {
      return $this->__soapCall('CheckoutShoppingCart', array($parameters));
    }

    /**
     * Gets a list of sales.
     *
     * @param GetSales $parameters
     * @return GetSalesResponse
     */
    public function GetSales(GetSales $parameters)
    {
      return $this->__soapCall('GetSales', array($parameters));
    }

    /**
     * Gets a list of services available for sale.
     *
     * @param GetServices $parameters
     * @return GetServicesResponse
     */
    public function GetServices(GetServices $parameters)
    {
      return $this->__soapCall('GetServices', array($parameters));
    }

    /**
     * Update select services information.
     *
     * @param UpdateServices $parameters
     * @return UpdateServicesResponse
     */
    public function UpdateServices(UpdateServices $parameters)
    {
      return $this->__soapCall('UpdateServices', array($parameters));
    }

    /**
     * Gets a list of packages available for sale.
     *
     * @param GetPackages $parameters
     * @return GetPackagesResponse
     */
    public function GetPackages(GetPackages $parameters)
    {
      return $this->__soapCall('GetPackages', array($parameters));
    }

    /**
     * Get a list of products available for sale.
     *
     * @param GetProducts $parameters
     * @return GetProductsResponse
     */
    public function GetProducts(GetProducts $parameters)
    {
      return $this->__soapCall('GetProducts', array($parameters));
    }

    /**
     * Update select products information.
     *
     * @param UpdateProducts $parameters
     * @return UpdateProductsResponse
     */
    public function UpdateProducts(UpdateProducts $parameters)
    {
      return $this->__soapCall('UpdateProducts', array($parameters));
    }

    /**
     * Redeem a Spa Finder Gift Card.
     *
     * @param RedeemSpaFinderWellnessCard $parameters
     * @return RedeemSpaFinderWellnessCardResponse
     */
    public function RedeemSpaFinderWellnessCard(RedeemSpaFinderWellnessCard $parameters)
    {
      return $this->__soapCall('RedeemSpaFinderWellnessCard', array($parameters));
    }

    /**
     * Gets a list of Custom Payment Methods.
     *
     * @param GetCustomPaymentMethods $parameters
     * @return GetCustomPaymentMethodsResponse
     */
    public function GetCustomPaymentMethods(GetCustomPaymentMethods $parameters)
    {
      return $this->__soapCall('GetCustomPaymentMethods', array($parameters));
    }

    /**
     * Return a sale used in business mode. This only supports comp payment method.
     *
     * @param ReturnSale $parameters
     * @return ReturnSaleResponse
     */
    public function ReturnSale(ReturnSale $parameters)
    {
      return $this->__soapCall('ReturnSale', array($parameters));
    }

    /**
     * Modify sale date in business mode
     *
     * @param UpdateSaleDate $parameters
     * @return UpdateSaleDateResponse
     */
    public function UpdateSaleDate(UpdateSaleDate $parameters)
    {
      return $this->__soapCall('UpdateSaleDate', array($parameters));
    }

    /**
     * Gets a list of contracts for a given location.
     *
     * @param GetContracts $parameters
     * @return GetContractsResponse
     */
    public function GetContracts(GetContracts $parameters)
    {
      return $this->__soapCall('GetContracts', array($parameters));
    }

    /**
     * Purchase a contract.
     *
     * @param PurchaseContracts $parameters
     * @return PurchaseContractsResponse
     */
    public function PurchaseContracts(PurchaseContracts $parameters)
    {
      return $this->__soapCall('PurchaseContracts', array($parameters));
    }

}
