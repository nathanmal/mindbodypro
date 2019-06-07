<?php

namespace Mindbody\API\Service\SaleService;

/**
 * Provides methods and attributes relating to sales.
 */
class Sale_x0020_Service extends \Mindbody\API\Common\MBService
{
    /**
     * Name of the service
     * @var [type]
     */
    protected $servicename = 'SaleService';

    /**
     * Service-specific classes
     * @var array
     */
    protected $servicemap = array (
      'CheckoutShoppingCart'                => 'Mindbody\\API\\Service\\SaleService\\CheckoutShoppingCart',
      'CheckoutShoppingCartRequest'         => 'Mindbody\\API\\Service\\SaleService\\CheckoutShoppingCartRequest',
      'CheckoutShoppingCartResponse'        => 'Mindbody\\API\\Service\\SaleService\\CheckoutShoppingCartResponse',
      'CheckoutShoppingCartResult'          => 'Mindbody\\API\\Service\\SaleService\\CheckoutShoppingCartResult',
      'GetAcceptedCardType'                 => 'Mindbody\\API\\Service\\SaleService\\GetAcceptedCardType',
      'GetAcceptedCardTypeRequest'          => 'Mindbody\\API\\Service\\SaleService\\GetAcceptedCardTypeRequest',
      'GetAcceptedCardTypeResponse'         => 'Mindbody\\API\\Service\\SaleService\\GetAcceptedCardTypeResponse',
      'GetAcceptedCardTypeResult'           => 'Mindbody\\API\\Service\\SaleService\\GetAcceptedCardTypeResult',
      'GetContracts'                        => 'Mindbody\\API\\Service\\SaleService\\GetContracts',
      'GetContractsRequest'                 => 'Mindbody\\API\\Service\\SaleService\\GetContractsRequest',
      'GetContractsResponse'                => 'Mindbody\\API\\Service\\SaleService\\GetContractsResponse',
      'GetContractsResult'                  => 'Mindbody\\API\\Service\\SaleService\\GetContractsResult',
      'GetCustomPaymentMethods'             => 'Mindbody\\API\\Service\\SaleService\\GetCustomPaymentMethods',
      'GetCustomPaymentMethodsRequest'      => 'Mindbody\\API\\Service\\SaleService\\GetCustomPaymentMethodsRequest',
      'GetCustomPaymentMethodsResponse'     => 'Mindbody\\API\\Service\\SaleService\\GetCustomPaymentMethodsResponse',
      'GetCustomPaymentMethodsResult'       => 'Mindbody\\API\\Service\\SaleService\\GetCustomPaymentMethodsResult',
      'GetPackages'                         => 'Mindbody\\API\\Service\\SaleService\\GetPackages',
      'GetPackagesRequest'                  => 'Mindbody\\API\\Service\\SaleService\\GetPackagesRequest',
      'GetPackagesResponse'                 => 'Mindbody\\API\\Service\\SaleService\\GetPackagesResponse',
      'GetPackagesResult'                   => 'Mindbody\\API\\Service\\SaleService\\GetPackagesResult',
      'GetProducts'                         => 'Mindbody\\API\\Service\\SaleService\\GetProducts',
      'GetProductsRequest'                  => 'Mindbody\\API\\Service\\SaleService\\GetProductsRequest',
      'GetProductsResponse'                 => 'Mindbody\\API\\Service\\SaleService\\GetProductsResponse',
      'GetProductsResult'                   => 'Mindbody\\API\\Service\\SaleService\\GetProductsResult',
      'GetSales'                            => 'Mindbody\\API\\Service\\SaleService\\GetSales',
      'GetSalesRequest'                     => 'Mindbody\\API\\Service\\SaleService\\GetSalesRequest',
      'GetSalesResponse'                    => 'Mindbody\\API\\Service\\SaleService\\GetSalesResponse',
      'GetSalesResult'                      => 'Mindbody\\API\\Service\\SaleService\\GetSalesResult',
      'GetServices'                         => 'Mindbody\\API\\Service\\SaleService\\GetServices',
      'GetServicesRequest'                  => 'Mindbody\\API\\Service\\SaleService\\GetServicesRequest',
      'GetServicesResponse'                 => 'Mindbody\\API\\Service\\SaleService\\GetServicesResponse',
      'GetServicesResult'                   => 'Mindbody\\API\\Service\\SaleService\\GetServicesResult',
      'PurchaseContracts'                   => 'Mindbody\\API\\Service\\SaleService\\PurchaseContracts',
      'PurchaseContractsRequest'            => 'Mindbody\\API\\Service\\SaleService\\PurchaseContractsRequest',
      'PurchaseContractsResponse'           => 'Mindbody\\API\\Service\\SaleService\\PurchaseContractsResponse',
      'PurchaseContractsResult'             => 'Mindbody\\API\\Service\\SaleService\\PurchaseContractsResult',
      'RedeemSpaFinderWellnessCard'         => 'Mindbody\\API\\Service\\SaleService\\RedeemSpaFinderWellnessCard',
      'RedeemSpaFinderWellnessCardRequest'  => 'Mindbody\\API\\Service\\SaleService\\RedeemSpaFinderWellnessCardRequest',
      'RedeemSpaFinderWellnessCardResponse' => 'Mindbody\\API\\Service\\SaleService\\RedeemSpaFinderWellnessCardResponse',
      'RedeemSpaFinderWellnessCardResult'   => 'Mindbody\\API\\Service\\SaleService\\RedeemSpaFinderWellnessCardResult',
      'ReturnSale'                          => 'Mindbody\\API\\Service\\SaleService\\ReturnSale',
      'ReturnSaleRequest'                   => 'Mindbody\\API\\Service\\SaleService\\ReturnSaleRequest',
      'ReturnSaleResponse'                  => 'Mindbody\\API\\Service\\SaleService\\ReturnSaleResponse',
      'ReturnSaleResult'                    => 'Mindbody\\API\\Service\\SaleService\\ReturnSaleResult',
      'UpdateProducts'                      => 'Mindbody\\API\\Service\\SaleService\\UpdateProducts',
      'UpdateProductsRequest'               => 'Mindbody\\API\\Service\\SaleService\\UpdateProductsRequest',
      'UpdateProductsResponse'              => 'Mindbody\\API\\Service\\SaleService\\UpdateProductsResponse',
      'UpdateProductsResult'                => 'Mindbody\\API\\Service\\SaleService\\UpdateProductsResult',
      'UpdateSaleDate'                      => 'Mindbody\\API\\Service\\SaleService\\UpdateSaleDate',
      'UpdateSaleDateRequest'               => 'Mindbody\\API\\Service\\SaleService\\UpdateSaleDateRequest',
      'UpdateSaleDateResponse'              => 'Mindbody\\API\\Service\\SaleService\\UpdateSaleDateResponse',
      'UpdateSaleDateResult'                => 'Mindbody\\API\\Service\\SaleService\\UpdateSaleDateResult',
      'UpdateServices'                      => 'Mindbody\\API\\Service\\SaleService\\UpdateServices',
      'UpdateServicesRequest'               => 'Mindbody\\API\\Service\\SaleService\\UpdateServicesRequest',
      'UpdateServicesResponse'              => 'Mindbody\\API\\Service\\SaleService\\UpdateServicesResponse',
      'UpdateServicesResult'                => 'Mindbody\\API\\Service\\SaleService\\UpdateServicesResult',
    );

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
