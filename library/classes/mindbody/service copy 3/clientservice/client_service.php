<?php

namespace Mindbody\Service\ClientService;


/**
 * Provides methods and attributes relating to clients.
 */
class Client_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AddArrival' => 'Mindbody\\Service\\ClientService\\AddArrival',
      'AddArrivalRequest' => 'Mindbody\\Service\\ClientService\\AddArrivalRequest',
      'MBRequest' => 'Mindbody\\Service\\ClientService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\ClientService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\ClientService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\ClientService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\ClientService\\ArrayOfString',
      'AddArrivalResponse' => 'Mindbody\\Service\\ClientService\\AddArrivalResponse',
      'AddArrivalResult' => 'Mindbody\\Service\\ClientService\\AddArrivalResult',
      'MBResult' => 'Mindbody\\Service\\ClientService\\MBResult',
      'ClientService' => 'Mindbody\\Service\\ClientService\\ClientService',
      'MBObject' => 'Mindbody\\Service\\ClientService\\MBObject',
      'Site' => 'Mindbody\\Service\\ClientService\\Site',
      'Program' => 'Mindbody\\Service\\ClientService\\Program',
      'AddOrUpdateClients' => 'Mindbody\\Service\\ClientService\\AddOrUpdateClients',
      'AddOrUpdateClientsRequest' => 'Mindbody\\Service\\ClientService\\AddOrUpdateClientsRequest',
      'ArrayOfClient' => 'Mindbody\\Service\\ClientService\\ArrayOfClient',
      'Client' => 'Mindbody\\Service\\ClientService\\Client',
      'ArrayOfClientIndex' => 'Mindbody\\Service\\ClientService\\ArrayOfClientIndex',
      'ClientIndex' => 'Mindbody\\Service\\ClientService\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Mindbody\\Service\\ClientService\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Mindbody\\Service\\ClientService\\ClientIndexValue',
      'ClientCreditCard' => 'Mindbody\\Service\\ClientService\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Mindbody\\Service\\ClientService\\ArrayOfClientRelationship',
      'ClientRelationship' => 'Mindbody\\Service\\ClientService\\ClientRelationship',
      'Relationship' => 'Mindbody\\Service\\ClientService\\Relationship',
      'ArrayOfRep' => 'Mindbody\\Service\\ClientService\\ArrayOfRep',
      'Rep' => 'Mindbody\\Service\\ClientService\\Rep',
      'Staff' => 'Mindbody\\Service\\ClientService\\Staff',
      'ArrayOfAppointment' => 'Mindbody\\Service\\ClientService\\ArrayOfAppointment',
      'Appointment' => 'Mindbody\\Service\\ClientService\\Appointment',
      'ScheduleItem' => 'Mindbody\\Service\\ClientService\\ScheduleItem',
      'Unavailability' => 'Mindbody\\Service\\ClientService\\Unavailability',
      'Availability' => 'Mindbody\\Service\\ClientService\\Availability',
      'SessionType' => 'Mindbody\\Service\\ClientService\\SessionType',
      'ArrayOfProgram' => 'Mindbody\\Service\\ClientService\\ArrayOfProgram',
      'Location' => 'Mindbody\\Service\\ClientService\\Location',
      'ArrayOfResource' => 'Mindbody\\Service\\ClientService\\ArrayOfResource',
      'Resource' => 'Mindbody\\Service\\ClientService\\Resource',
      'ArrayOfUnavailability' => 'Mindbody\\Service\\ClientService\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Mindbody\\Service\\ClientService\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Mindbody\\Service\\ClientService\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Mindbody\\Service\\ClientService\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Mindbody\\Service\\ClientService\\ProviderIDUpdate',
      'ArrayOfSalesRep' => 'Mindbody\\Service\\ClientService\\ArrayOfSalesRep',
      'SalesRep' => 'Mindbody\\Service\\ClientService\\SalesRep',
      'ArrayOfCustomClientField' => 'Mindbody\\Service\\ClientService\\ArrayOfCustomClientField',
      'CustomClientField' => 'Mindbody\\Service\\ClientService\\CustomClientField',
      'Liability' => 'Mindbody\\Service\\ClientService\\Liability',
      'ProspectStage' => 'Mindbody\\Service\\ClientService\\ProspectStage',
      'AddOrUpdateClientsResponse' => 'Mindbody\\Service\\ClientService\\AddOrUpdateClientsResponse',
      'AddOrUpdateClientsResult' => 'Mindbody\\Service\\ClientService\\AddOrUpdateClientsResult',
      'UpdateClientCrossRegional' => 'Mindbody\\Service\\ClientService\\UpdateClientCrossRegional',
      'UpdateClientCrossRegionalRequest' => 'Mindbody\\Service\\ClientService\\UpdateClientCrossRegionalRequest',
      'UpdateClientCrossRegionalResponse' => 'Mindbody\\Service\\ClientService\\UpdateClientCrossRegionalResponse',
      'UpdateClientCrossRegionalResult' => 'Mindbody\\Service\\ClientService\\UpdateClientCrossRegionalResult',
      'GetClients' => 'Mindbody\\Service\\ClientService\\GetClients',
      'GetClientsRequest' => 'Mindbody\\Service\\ClientService\\GetClientsRequest',
      'GetClientsResponse' => 'Mindbody\\Service\\ClientService\\GetClientsResponse',
      'GetClientsResult' => 'Mindbody\\Service\\ClientService\\GetClientsResult',
      'GetCrossRegionalClientAssociations' => 'Mindbody\\Service\\ClientService\\GetCrossRegionalClientAssociations',
      'GetCrossRegionalClientAssociationsRequest' => 'Mindbody\\Service\\ClientService\\GetCrossRegionalClientAssociationsRequest',
      'GetCrossRegionalClientAssociationsResponse' => 'Mindbody\\Service\\ClientService\\GetCrossRegionalClientAssociationsResponse',
      'GetCrossRegionalClientAssociationsResult' => 'Mindbody\\Service\\ClientService\\GetCrossRegionalClientAssociationsResult',
      'ArrayOfCrossRegionalAssociation' => 'Mindbody\\Service\\ClientService\\ArrayOfCrossRegionalAssociation',
      'CrossRegionalAssociation' => 'Mindbody\\Service\\ClientService\\CrossRegionalAssociation',
      'GetCustomClientFields' => 'Mindbody\\Service\\ClientService\\GetCustomClientFields',
      'GetCustomClientFieldsRequest' => 'Mindbody\\Service\\ClientService\\GetCustomClientFieldsRequest',
      'GetCustomClientFieldsResponse' => 'Mindbody\\Service\\ClientService\\GetCustomClientFieldsResponse',
      'GetCustomClientFieldsResult' => 'Mindbody\\Service\\ClientService\\GetCustomClientFieldsResult',
      'GetClientIndexes' => 'Mindbody\\Service\\ClientService\\GetClientIndexes',
      'GetClientIndexesRequest' => 'Mindbody\\Service\\ClientService\\GetClientIndexesRequest',
      'GetClientIndexesResponse' => 'Mindbody\\Service\\ClientService\\GetClientIndexesResponse',
      'GetClientIndexesResult' => 'Mindbody\\Service\\ClientService\\GetClientIndexesResult',
      'GetClientContactLogs' => 'Mindbody\\Service\\ClientService\\GetClientContactLogs',
      'GetClientContactLogsRequest' => 'Mindbody\\Service\\ClientService\\GetClientContactLogsRequest',
      'ArrayOfLong' => 'Mindbody\\Service\\ClientService\\ArrayOfLong',
      'GetClientContactLogsResponse' => 'Mindbody\\Service\\ClientService\\GetClientContactLogsResponse',
      'GetClientContactLogsResult' => 'Mindbody\\Service\\ClientService\\GetClientContactLogsResult',
      'ArrayOfContactLog' => 'Mindbody\\Service\\ClientService\\ArrayOfContactLog',
      'ContactLog' => 'Mindbody\\Service\\ClientService\\ContactLog',
      'ArrayOfContactLogComment' => 'Mindbody\\Service\\ClientService\\ArrayOfContactLogComment',
      'ContactLogComment' => 'Mindbody\\Service\\ClientService\\ContactLogComment',
      'ArrayOfContactLogType' => 'Mindbody\\Service\\ClientService\\ArrayOfContactLogType',
      'ContactLogType' => 'Mindbody\\Service\\ClientService\\ContactLogType',
      'ArrayOfContactLogSubtype' => 'Mindbody\\Service\\ClientService\\ArrayOfContactLogSubtype',
      'ContactLogSubtype' => 'Mindbody\\Service\\ClientService\\ContactLogSubtype',
      'AddOrUpdateContactLogs' => 'Mindbody\\Service\\ClientService\\AddOrUpdateContactLogs',
      'AddOrUpdateContactLogsRequest' => 'Mindbody\\Service\\ClientService\\AddOrUpdateContactLogsRequest',
      'AddOrUpdateContactLogsResponse' => 'Mindbody\\Service\\ClientService\\AddOrUpdateContactLogsResponse',
      'AddOrUpdateContactLogsResult' => 'Mindbody\\Service\\ClientService\\AddOrUpdateContactLogsResult',
      'GetContactLogTypes' => 'Mindbody\\Service\\ClientService\\GetContactLogTypes',
      'GetContactLogTypesRequest' => 'Mindbody\\Service\\ClientService\\GetContactLogTypesRequest',
      'GetContactLogTypesResponse' => 'Mindbody\\Service\\ClientService\\GetContactLogTypesResponse',
      'GetContactLogTypesResult' => 'Mindbody\\Service\\ClientService\\GetContactLogTypesResult',
      'UploadClientDocument' => 'Mindbody\\Service\\ClientService\\UploadClientDocument',
      'UploadClientDocumentRequest' => 'Mindbody\\Service\\ClientService\\UploadClientDocumentRequest',
      'UploadClientDocumentResponse' => 'Mindbody\\Service\\ClientService\\UploadClientDocumentResponse',
      'UploadClientDocumentResult' => 'Mindbody\\Service\\ClientService\\UploadClientDocumentResult',
      'UploadClientPhoto' => 'Mindbody\\Service\\ClientService\\UploadClientPhoto',
      'UploadClientPhotoRequest' => 'Mindbody\\Service\\ClientService\\UploadClientPhotoRequest',
      'UploadClientPhotoResponse' => 'Mindbody\\Service\\ClientService\\UploadClientPhotoResponse',
      'UploadClientPhotoResult' => 'Mindbody\\Service\\ClientService\\UploadClientPhotoResult',
      'GetClientFormulaNotes' => 'Mindbody\\Service\\ClientService\\GetClientFormulaNotes',
      'GetClientFormulaNotesRequest' => 'Mindbody\\Service\\ClientService\\GetClientFormulaNotesRequest',
      'GetClientFormulaNotesResponse' => 'Mindbody\\Service\\ClientService\\GetClientFormulaNotesResponse',
      'GetClientFormulaNotesResult' => 'Mindbody\\Service\\ClientService\\GetClientFormulaNotesResult',
      'ArrayOfFormulaNote' => 'Mindbody\\Service\\ClientService\\ArrayOfFormulaNote',
      'FormulaNote' => 'Mindbody\\Service\\ClientService\\FormulaNote',
      'AddClientFormulaNote' => 'Mindbody\\Service\\ClientService\\AddClientFormulaNote',
      'AddClientFormulaNoteRequest' => 'Mindbody\\Service\\ClientService\\AddClientFormulaNoteRequest',
      'AddClientFormulaNoteResponse' => 'Mindbody\\Service\\ClientService\\AddClientFormulaNoteResponse',
      'AddClientFormulaNoteResult' => 'Mindbody\\Service\\ClientService\\AddClientFormulaNoteResult',
      'DeleteClientFormulaNote' => 'Mindbody\\Service\\ClientService\\DeleteClientFormulaNote',
      'DeleteCientFormulaNoteRequest' => 'Mindbody\\Service\\ClientService\\DeleteCientFormulaNoteRequest',
      'DeleteClientFormulaNoteResponse' => 'Mindbody\\Service\\ClientService\\DeleteClientFormulaNoteResponse',
      'DeleteClientFormulaNoteResult' => 'Mindbody\\Service\\ClientService\\DeleteClientFormulaNoteResult',
      'GetClientReferralTypes' => 'Mindbody\\Service\\ClientService\\GetClientReferralTypes',
      'GetClientReferralTypesRequest' => 'Mindbody\\Service\\ClientService\\GetClientReferralTypesRequest',
      'GetClientReferralTypesResponse' => 'Mindbody\\Service\\ClientService\\GetClientReferralTypesResponse',
      'GetClientReferralTypesResult' => 'Mindbody\\Service\\ClientService\\GetClientReferralTypesResult',
      'GetActiveClientMemberships' => 'Mindbody\\Service\\ClientService\\GetActiveClientMemberships',
      'GetActiveClientMembershipsRequest' => 'Mindbody\\Service\\ClientService\\GetActiveClientMembershipsRequest',
      'GetActiveClientMembershipsResponse' => 'Mindbody\\Service\\ClientService\\GetActiveClientMembershipsResponse',
      'GetActiveClientMembershipsResult' => 'Mindbody\\Service\\ClientService\\GetActiveClientMembershipsResult',
      'ArrayOfClientMembership' => 'Mindbody\\Service\\ClientService\\ArrayOfClientMembership',
      'ClientMembership' => 'Mindbody\\Service\\ClientService\\ClientMembership',
      'GetClientContracts' => 'Mindbody\\Service\\ClientService\\GetClientContracts',
      'GetClientContractsRequest' => 'Mindbody\\Service\\ClientService\\GetClientContractsRequest',
      'CrossRegionalRequest' => 'Mindbody\\Service\\ClientService\\CrossRegionalRequest',
      'PagedBySitesMBRequest' => 'Mindbody\\Service\\ClientService\\PagedBySitesMBRequest',
      'GetClientContractsResponse' => 'Mindbody\\Service\\ClientService\\GetClientContractsResponse',
      'GetClientContractsResult' => 'Mindbody\\Service\\ClientService\\GetClientContractsResult',
      'PagedBySitesMBResult' => 'Mindbody\\Service\\ClientService\\PagedBySitesMBResult',
      'ArrayOfClientContract' => 'Mindbody\\Service\\ClientService\\ArrayOfClientContract',
      'ClientContract' => 'Mindbody\\Service\\ClientService\\ClientContract',
      'ArrayOfUpcomingAutopayEvent' => 'Mindbody\\Service\\ClientService\\ArrayOfUpcomingAutopayEvent',
      'UpcomingAutopayEvent' => 'Mindbody\\Service\\ClientService\\UpcomingAutopayEvent',
      'GetClientAccountBalances' => 'Mindbody\\Service\\ClientService\\GetClientAccountBalances',
      'GetClientAccountBalancesRequest' => 'Mindbody\\Service\\ClientService\\GetClientAccountBalancesRequest',
      'GetClientAccountBalancesResponse' => 'Mindbody\\Service\\ClientService\\GetClientAccountBalancesResponse',
      'GetClientAccountBalancesResult' => 'Mindbody\\Service\\ClientService\\GetClientAccountBalancesResult',
      'GetClientServices' => 'Mindbody\\Service\\ClientService\\GetClientServices',
      'GetClientServicesRequest' => 'Mindbody\\Service\\ClientService\\GetClientServicesRequest',
      'GetClientServicesResponse' => 'Mindbody\\Service\\ClientService\\GetClientServicesResponse',
      'GetClientServicesResult' => 'Mindbody\\Service\\ClientService\\GetClientServicesResult',
      'ArrayOfClientService' => 'Mindbody\\Service\\ClientService\\ArrayOfClientService',
      'GetClientVisits' => 'Mindbody\\Service\\ClientService\\GetClientVisits',
      'GetClientVisitsRequest' => 'Mindbody\\Service\\ClientService\\GetClientVisitsRequest',
      'GetClientVisitsResponse' => 'Mindbody\\Service\\ClientService\\GetClientVisitsResponse',
      'GetClientVisitsResult' => 'Mindbody\\Service\\ClientService\\GetClientVisitsResult',
      'ArrayOfVisit' => 'Mindbody\\Service\\ClientService\\ArrayOfVisit',
      'Visit' => 'Mindbody\\Service\\ClientService\\Visit',
      'GetClientPurchases' => 'Mindbody\\Service\\ClientService\\GetClientPurchases',
      'GetClientPurchasesRequest' => 'Mindbody\\Service\\ClientService\\GetClientPurchasesRequest',
      'GetClientPurchasesResponse' => 'Mindbody\\Service\\ClientService\\GetClientPurchasesResponse',
      'GetClientPurchasesResult' => 'Mindbody\\Service\\ClientService\\GetClientPurchasesResult',
      'ArrayOfSaleItem' => 'Mindbody\\Service\\ClientService\\ArrayOfSaleItem',
      'SaleItem' => 'Mindbody\\Service\\ClientService\\SaleItem',
      'Sale' => 'Mindbody\\Service\\ClientService\\Sale',
      'ArrayOfPurchasedItem' => 'Mindbody\\Service\\ClientService\\ArrayOfPurchasedItem',
      'PurchasedItem' => 'Mindbody\\Service\\ClientService\\PurchasedItem',
      'ArrayOfPayment' => 'Mindbody\\Service\\ClientService\\ArrayOfPayment',
      'Payment' => 'Mindbody\\Service\\ClientService\\Payment',
      'GetClientSchedule' => 'Mindbody\\Service\\ClientService\\GetClientSchedule',
      'GetClientScheduleRequest' => 'Mindbody\\Service\\ClientService\\GetClientScheduleRequest',
      'GetClientScheduleResponse' => 'Mindbody\\Service\\ClientService\\GetClientScheduleResponse',
      'GetClientScheduleResult' => 'Mindbody\\Service\\ClientService\\GetClientScheduleResult',
      'GetRequiredClientFields' => 'Mindbody\\Service\\ClientService\\GetRequiredClientFields',
      'GetRequiredClientFieldsRequest' => 'Mindbody\\Service\\ClientService\\GetRequiredClientFieldsRequest',
      'GetRequiredClientFieldsResponse' => 'Mindbody\\Service\\ClientService\\GetRequiredClientFieldsResponse',
      'GetRequiredClientFieldsResult' => 'Mindbody\\Service\\ClientService\\GetRequiredClientFieldsResult',
      'ValidateLogin' => 'Mindbody\\Service\\ClientService\\ValidateLogin',
      'ValidateLoginRequest' => 'Mindbody\\Service\\ClientService\\ValidateLoginRequest',
      'ValidateLoginResponse' => 'Mindbody\\Service\\ClientService\\ValidateLoginResponse',
      'ValidateLoginResult' => 'Mindbody\\Service\\ClientService\\ValidateLoginResult',
      'UpdateClientServices' => 'Mindbody\\Service\\ClientService\\UpdateClientServices',
      'UpdateClientServicesRequest' => 'Mindbody\\Service\\ClientService\\UpdateClientServicesRequest',
      'UpdateClientServicesResponse' => 'Mindbody\\Service\\ClientService\\UpdateClientServicesResponse',
      'UpdateClientServicesResult' => 'Mindbody\\Service\\ClientService\\UpdateClientServicesResult',
      'SendUserNewPassword' => 'Mindbody\\Service\\ClientService\\SendUserNewPassword',
      'ClientSendUserNewPasswordRequest' => 'Mindbody\\Service\\ClientService\\ClientSendUserNewPasswordRequest',
      'SendUserNewPasswordResponse' => 'Mindbody\\Service\\ClientService\\SendUserNewPasswordResponse',
      'ClientSendUserNewPasswordResult' => 'Mindbody\\Service\\ClientService\\ClientSendUserNewPasswordResult',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/ClientService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Adds an arrival record for the given client.
     *
     * @param AddArrival $parameters
     * @return AddArrivalResponse
     */
    public function AddArrival(AddArrival $parameters)
    {
      return $this->__soapCall('AddArrival', array($parameters));
    }

    /**
     * Adds or updates information for a list of clients.
     *
     * @param AddOrUpdateClients $parameters
     * @return AddOrUpdateClientsResponse
     */
    public function AddOrUpdateClients(AddOrUpdateClients $parameters)
    {
      return $this->__soapCall('AddOrUpdateClients', array($parameters));
    }

    /**
     * Updates a client's information and any cross-regional clients' information
     *
     * @param UpdateClientCrossRegional $parameters
     * @return UpdateClientCrossRegionalResponse
     */
    public function UpdateClientCrossRegional(UpdateClientCrossRegional $parameters)
    {
      return $this->__soapCall('UpdateClientCrossRegional', array($parameters));
    }

    /**
     * Gets a list of clients.
     *
     * @param GetClients $parameters
     * @return GetClientsResponse
     */
    public function GetClients(GetClients $parameters)
    {
      return $this->__soapCall('GetClients', array($parameters));
    }

    /**
     * Gets a list of Client IDs representing the same client at different sites within the region.
     *
     * @param GetCrossRegionalClientAssociations $parameters
     * @return GetCrossRegionalClientAssociationsResponse
     */
    public function GetCrossRegionalClientAssociations(GetCrossRegionalClientAssociations $parameters)
    {
      return $this->__soapCall('GetCrossRegionalClientAssociations', array($parameters));
    }

    /**
     * Gets a list of currently available client indexes.
     *
     * @param GetCustomClientFields $parameters
     * @return GetCustomClientFieldsResponse
     */
    public function GetCustomClientFields(GetCustomClientFields $parameters)
    {
      return $this->__soapCall('GetCustomClientFields', array($parameters));
    }

    /**
     * Gets a list of currently available client indexes.
     *
     * @param GetClientIndexes $parameters
     * @return GetClientIndexesResponse
     */
    public function GetClientIndexes(GetClientIndexes $parameters)
    {
      return $this->__soapCall('GetClientIndexes', array($parameters));
    }

    /**
     * Get contact logs for a client.
     *
     * @param GetClientContactLogs $parameters
     * @return GetClientContactLogsResponse
     */
    public function GetClientContactLogs(GetClientContactLogs $parameters)
    {
      return $this->__soapCall('GetClientContactLogs', array($parameters));
    }

    /**
     * Add or update client contact logs.
     *
     * @param AddOrUpdateContactLogs $parameters
     * @return AddOrUpdateContactLogsResponse
     */
    public function AddOrUpdateContactLogs(AddOrUpdateContactLogs $parameters)
    {
      return $this->__soapCall('AddOrUpdateContactLogs', array($parameters));
    }

    /**
     * Get contact log types for a client.
     *
     * @param GetContactLogTypes $parameters
     * @return GetContactLogTypesResponse
     */
    public function GetContactLogTypes(GetContactLogTypes $parameters)
    {
      return $this->__soapCall('GetContactLogTypes', array($parameters));
    }

    /**
     * Upload a client document.
     *
     * @param UploadClientDocument $parameters
     * @return UploadClientDocumentResponse
     */
    public function UploadClientDocument(UploadClientDocument $parameters)
    {
      return $this->__soapCall('UploadClientDocument', array($parameters));
    }

    /**
     * Upload a client photo.
     *
     * @param UploadClientPhoto $parameters
     * @return UploadClientPhotoResponse
     */
    public function UploadClientPhoto(UploadClientPhoto $parameters)
    {
      return $this->__soapCall('UploadClientPhoto', array($parameters));
    }

    /**
     * Gets a list of client formula notes.
     *
     * @param GetClientFormulaNotes $parameters
     * @return GetClientFormulaNotesResponse
     */
    public function GetClientFormulaNotes(GetClientFormulaNotes $parameters)
    {
      return $this->__soapCall('GetClientFormulaNotes', array($parameters));
    }

    /**
     * Adds a formula note to a client.
     *
     * @param AddClientFormulaNote $parameters
     * @return AddClientFormulaNoteResponse
     */
    public function AddClientFormulaNote(AddClientFormulaNote $parameters)
    {
      return $this->__soapCall('AddClientFormulaNote', array($parameters));
    }

    /**
     * Deletes a formula note to a client.
     *
     * @param DeleteClientFormulaNote $parameters
     * @return DeleteClientFormulaNoteResponse
     */
    public function DeleteClientFormulaNote(DeleteClientFormulaNote $parameters)
    {
      return $this->__soapCall('DeleteClientFormulaNote', array($parameters));
    }

    /**
     * Gets a list of clients.
     *
     * @param GetClientReferralTypes $parameters
     * @return GetClientReferralTypesResponse
     */
    public function GetClientReferralTypes(GetClientReferralTypes $parameters)
    {
      return $this->__soapCall('GetClientReferralTypes', array($parameters));
    }

    /**
     * Gets the active membership for a given client.
     *
     * @param GetActiveClientMemberships $parameters
     * @return GetActiveClientMembershipsResponse
     */
    public function GetActiveClientMemberships(GetActiveClientMemberships $parameters)
    {
      return $this->__soapCall('GetActiveClientMemberships', array($parameters));
    }

    /**
     * Gets a list of contracts for a given client.
     *
     * @param GetClientContracts $parameters
     * @return GetClientContractsResponse
     */
    public function GetClientContracts(GetClientContracts $parameters)
    {
      return $this->__soapCall('GetClientContracts', array($parameters));
    }

    /**
     * Gets account balances for the given clients.
     *
     * @param GetClientAccountBalances $parameters
     * @return GetClientAccountBalancesResponse
     */
    public function GetClientAccountBalances(GetClientAccountBalances $parameters)
    {
      return $this->__soapCall('GetClientAccountBalances', array($parameters));
    }

    /**
     * Gets a client service for a given client.
     *
     * @param GetClientServices $parameters
     * @return GetClientServicesResponse
     */
    public function GetClientServices(GetClientServices $parameters)
    {
      return $this->__soapCall('GetClientServices', array($parameters));
    }

    /**
     * Get visits for a client.
     *
     * @param GetClientVisits $parameters
     * @return GetClientVisitsResponse
     */
    public function GetClientVisits(GetClientVisits $parameters)
    {
      return $this->__soapCall('GetClientVisits', array($parameters));
    }

    /**
     * Get purchases for a client.
     *
     * @param GetClientPurchases $parameters
     * @return GetClientPurchasesResponse
     */
    public function GetClientPurchases(GetClientPurchases $parameters)
    {
      return $this->__soapCall('GetClientPurchases', array($parameters));
    }

    /**
     * Get visits for a client.
     *
     * @param GetClientSchedule $parameters
     * @return GetClientScheduleResponse
     */
    public function GetClientSchedule(GetClientSchedule $parameters)
    {
      return $this->__soapCall('GetClientSchedule', array($parameters));
    }

    /**
     * Updates a client service for a given client.
     *
     * @param GetRequiredClientFields $parameters
     * @return GetRequiredClientFieldsResponse
     */
    public function GetRequiredClientFields(GetRequiredClientFields $parameters)
    {
      return $this->__soapCall('GetRequiredClientFields', array($parameters));
    }

    /**
     * Validates a username and password. This method returns the associated clients record and a session GUID on success.
     *
     * @param ValidateLogin $parameters
     * @return ValidateLoginResponse
     */
    public function ValidateLogin(ValidateLogin $parameters)
    {
      return $this->__soapCall('ValidateLogin', array($parameters));
    }

    /**
     * Updates a client service for a given client.
     *
     * @param UpdateClientServices $parameters
     * @return UpdateClientServicesResponse
     */
    public function UpdateClientServices(UpdateClientServices $parameters)
    {
      return $this->__soapCall('UpdateClientServices', array($parameters));
    }

    /**
     * Sends the user a new password.
     *
     * @param SendUserNewPassword $parameters
     * @return SendUserNewPasswordResponse
     */
    public function SendUserNewPassword(SendUserNewPassword $parameters)
    {
      return $this->__soapCall('SendUserNewPassword', array($parameters));
    }

}
