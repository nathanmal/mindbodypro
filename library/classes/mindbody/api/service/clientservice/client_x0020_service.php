<?php

namespace Mindbody\API\Service\ClientService;

/**
 * Provides methods and attributes relating to clients.
 */
class Client_x0020_Service extends \Mindbody\API\Common\MBService
{   
    /**
     * Name of the service
     * @var [type]
     */
    protected $servicename = 'ClientService';

    /**
    * Service-specific classes
    * @var array
    */
    protected $servicemap = array (
      'AddArrival'                                 => 'Mindbody\\API\\Service\\ClientService\\AddArrival',
      'AddArrivalRequest'                          => 'Mindbody\\API\\Service\\ClientService\\AddArrivalRequest',
      'AddArrivalResponse'                         => 'Mindbody\\API\\Service\\ClientService\\AddArrivalResponse',
      'AddArrivalResult'                           => 'Mindbody\\API\\Service\\ClientService\\AddArrivalResult',
      'AddClientFormulaNote'                       => 'Mindbody\\API\\Service\\ClientService\\AddClientFormulaNote',
      'AddClientFormulaNoteRequest'                => 'Mindbody\\API\\Service\\ClientService\\AddClientFormulaNoteRequest',
      'AddClientFormulaNoteResponse'               => 'Mindbody\\API\\Service\\ClientService\\AddClientFormulaNoteResponse',
      'AddClientFormulaNoteResult'                 => 'Mindbody\\API\\Service\\ClientService\\AddClientFormulaNoteResult',
      'AddOrUpdateClients'                         => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateClients',
      'AddOrUpdateClientsRequest'                  => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateClientsRequest',
      'AddOrUpdateClientsResponse'                 => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateClientsResponse',
      'AddOrUpdateClientsResult'                   => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateClientsResult',
      'AddOrUpdateContactLogs'                     => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateContactLogs',
      'AddOrUpdateContactLogsRequest'              => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateContactLogsRequest',
      'AddOrUpdateContactLogsResponse'             => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateContactLogsResponse',
      'AddOrUpdateContactLogsResult'               => 'Mindbody\\API\\Service\\ClientService\\AddOrUpdateContactLogsResult',
      'ClientSendUserNewPasswordRequest'           => 'Mindbody\\API\\Service\\ClientService\\ClientSendUserNewPasswordRequest',
      'ClientSendUserNewPasswordResult'            => 'Mindbody\\API\\Service\\ClientService\\ClientSendUserNewPasswordResult',
      'CrossRegionalRequest'                       => 'Mindbody\\API\\Service\\ClientService\\CrossRegionalRequest',
      'DeleteCientFormulaNoteRequest'              => 'Mindbody\\API\\Service\\ClientService\\DeleteCientFormulaNoteRequest',
      'DeleteClientFormulaNote'                    => 'Mindbody\\API\\Service\\ClientService\\DeleteClientFormulaNote',
      'DeleteClientFormulaNoteResponse'            => 'Mindbody\\API\\Service\\ClientService\\DeleteClientFormulaNoteResponse',
      'DeleteClientFormulaNoteResult'              => 'Mindbody\\API\\Service\\ClientService\\DeleteClientFormulaNoteResult',
      'GetActiveClientMemberships'                 => 'Mindbody\\API\\Service\\ClientService\\GetActiveClientMemberships',
      'GetActiveClientMembershipsRequest'          => 'Mindbody\\API\\Service\\ClientService\\GetActiveClientMembershipsRequest',
      'GetActiveClientMembershipsResponse'         => 'Mindbody\\API\\Service\\ClientService\\GetActiveClientMembershipsResponse',
      'GetActiveClientMembershipsResult'           => 'Mindbody\\API\\Service\\ClientService\\GetActiveClientMembershipsResult',
      'GetClientAccountBalances'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientAccountBalances',
      'GetClientAccountBalancesRequest'            => 'Mindbody\\API\\Service\\ClientService\\GetClientAccountBalancesRequest',
      'GetClientAccountBalancesResponse'           => 'Mindbody\\API\\Service\\ClientService\\GetClientAccountBalancesResponse',
      'GetClientAccountBalancesResult'             => 'Mindbody\\API\\Service\\ClientService\\GetClientAccountBalancesResult',
      'GetClientContactLogs'                       => 'Mindbody\\API\\Service\\ClientService\\GetClientContactLogs',
      'GetClientContactLogsRequest'                => 'Mindbody\\API\\Service\\ClientService\\GetClientContactLogsRequest',
      'GetClientContactLogsResponse'               => 'Mindbody\\API\\Service\\ClientService\\GetClientContactLogsResponse',
      'GetClientContactLogsResult'                 => 'Mindbody\\API\\Service\\ClientService\\GetClientContactLogsResult',
      'GetClientContracts'                         => 'Mindbody\\API\\Service\\ClientService\\GetClientContracts',
      'GetClientContractsRequest'                  => 'Mindbody\\API\\Service\\ClientService\\GetClientContractsRequest',
      'GetClientContractsResponse'                 => 'Mindbody\\API\\Service\\ClientService\\GetClientContractsResponse',
      'GetClientContractsResult'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientContractsResult',
      'GetClientFormulaNotes'                      => 'Mindbody\\API\\Service\\ClientService\\GetClientFormulaNotes',
      'GetClientFormulaNotesRequest'               => 'Mindbody\\API\\Service\\ClientService\\GetClientFormulaNotesRequest',
      'GetClientFormulaNotesResponse'              => 'Mindbody\\API\\Service\\ClientService\\GetClientFormulaNotesResponse',
      'GetClientFormulaNotesResult'                => 'Mindbody\\API\\Service\\ClientService\\GetClientFormulaNotesResult',
      'GetClientIndexes'                           => 'Mindbody\\API\\Service\\ClientService\\GetClientIndexes',
      'GetClientIndexesRequest'                    => 'Mindbody\\API\\Service\\ClientService\\GetClientIndexesRequest',
      'GetClientIndexesResponse'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientIndexesResponse',
      'GetClientIndexesResult'                     => 'Mindbody\\API\\Service\\ClientService\\GetClientIndexesResult',
      'GetClientPurchases'                         => 'Mindbody\\API\\Service\\ClientService\\GetClientPurchases',
      'GetClientPurchasesRequest'                  => 'Mindbody\\API\\Service\\ClientService\\GetClientPurchasesRequest',
      'GetClientPurchasesResponse'                 => 'Mindbody\\API\\Service\\ClientService\\GetClientPurchasesResponse',
      'GetClientPurchasesResult'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientPurchasesResult',
      'GetClientReferralTypes'                     => 'Mindbody\\API\\Service\\ClientService\\GetClientReferralTypes',
      'GetClientReferralTypesRequest'              => 'Mindbody\\API\\Service\\ClientService\\GetClientReferralTypesRequest',
      'GetClientReferralTypesResponse'             => 'Mindbody\\API\\Service\\ClientService\\GetClientReferralTypesResponse',
      'GetClientReferralTypesResult'               => 'Mindbody\\API\\Service\\ClientService\\GetClientReferralTypesResult',
      'GetClients'                                 => 'Mindbody\\API\\Service\\ClientService\\GetClients',
      'GetClientSchedule'                          => 'Mindbody\\API\\Service\\ClientService\\GetClientSchedule',
      'GetClientScheduleRequest'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientScheduleRequest',
      'GetClientScheduleResponse'                  => 'Mindbody\\API\\Service\\ClientService\\GetClientScheduleResponse',
      'GetClientScheduleResult'                    => 'Mindbody\\API\\Service\\ClientService\\GetClientScheduleResult',
      'GetClientServices'                          => 'Mindbody\\API\\Service\\ClientService\\GetClientServices',
      'GetClientServicesRequest'                   => 'Mindbody\\API\\Service\\ClientService\\GetClientServicesRequest',
      'GetClientServicesResponse'                  => 'Mindbody\\API\\Service\\ClientService\\GetClientServicesResponse',
      'GetClientServicesResult'                    => 'Mindbody\\API\\Service\\ClientService\\GetClientServicesResult',
      'GetClientsRequest'                          => 'Mindbody\\API\\Service\\ClientService\\GetClientsRequest',
      'GetClientsResponse'                         => 'Mindbody\\API\\Service\\ClientService\\GetClientsResponse',
      'GetClientsResult'                           => 'Mindbody\\API\\Service\\ClientService\\GetClientsResult',
      'GetClientVisits'                            => 'Mindbody\\API\\Service\\ClientService\\GetClientVisits',
      'GetClientVisitsRequest'                     => 'Mindbody\\API\\Service\\ClientService\\GetClientVisitsRequest',
      'GetClientVisitsResponse'                    => 'Mindbody\\API\\Service\\ClientService\\GetClientVisitsResponse',
      'GetClientVisitsResult'                      => 'Mindbody\\API\\Service\\ClientService\\GetClientVisitsResult',
      'GetContactLogTypes'                         => 'Mindbody\\API\\Service\\ClientService\\GetContactLogTypes',
      'GetContactLogTypesRequest'                  => 'Mindbody\\API\\Service\\ClientService\\GetContactLogTypesRequest',
      'GetContactLogTypesResponse'                 => 'Mindbody\\API\\Service\\ClientService\\GetContactLogTypesResponse',
      'GetContactLogTypesResult'                   => 'Mindbody\\API\\Service\\ClientService\\GetContactLogTypesResult',
      'GetCrossRegionalClientAssociations'         => 'Mindbody\\API\\Service\\ClientService\\GetCrossRegionalClientAssociations',
      'GetCrossRegionalClientAssociationsRequest'  => 'Mindbody\\API\\Service\\ClientService\\GetCrossRegionalClientAssociationsRequest',
      'GetCrossRegionalClientAssociationsResponse' => 'Mindbody\\API\\Service\\ClientService\\GetCrossRegionalClientAssociationsResponse',
      'GetCrossRegionalClientAssociationsResult'   => 'Mindbody\\API\\Service\\ClientService\\GetCrossRegionalClientAssociationsResult',
      'GetCustomClientFields'                      => 'Mindbody\\API\\Service\\ClientService\\GetCustomClientFields',
      'GetCustomClientFieldsRequest'               => 'Mindbody\\API\\Service\\ClientService\\GetCustomClientFieldsRequest',
      'GetCustomClientFieldsResponse'              => 'Mindbody\\API\\Service\\ClientService\\GetCustomClientFieldsResponse',
      'GetCustomClientFieldsResult'                => 'Mindbody\\API\\Service\\ClientService\\GetCustomClientFieldsResult',
      'GetRequiredClientFields'                    => 'Mindbody\\API\\Service\\ClientService\\GetRequiredClientFields',
      'GetRequiredClientFieldsRequest'             => 'Mindbody\\API\\Service\\ClientService\\GetRequiredClientFieldsRequest',
      'GetRequiredClientFieldsResponse'            => 'Mindbody\\API\\Service\\ClientService\\GetRequiredClientFieldsResponse',
      'GetRequiredClientFieldsResult'              => 'Mindbody\\API\\Service\\ClientService\\GetRequiredClientFieldsResult',
      'PagedBySitesMBRequest'                      => 'Mindbody\\API\\Service\\ClientService\\PagedBySitesMBRequest',
      'PagedBySitesMBResult'                       => 'Mindbody\\API\\Service\\ClientService\\PagedBySitesMBResult',
      'SendUserNewPassword'                        => 'Mindbody\\API\\Service\\ClientService\\SendUserNewPassword',
      'SendUserNewPasswordResponse'                => 'Mindbody\\API\\Service\\ClientService\\SendUserNewPasswordResponse',
      'UpdateClientCrossRegional'                  => 'Mindbody\\API\\Service\\ClientService\\UpdateClientCrossRegional',
      'UpdateClientCrossRegionalRequest'           => 'Mindbody\\API\\Service\\ClientService\\UpdateClientCrossRegionalRequest',
      'UpdateClientCrossRegionalResponse'          => 'Mindbody\\API\\Service\\ClientService\\UpdateClientCrossRegionalResponse',
      'UpdateClientCrossRegionalResult'            => 'Mindbody\\API\\Service\\ClientService\\UpdateClientCrossRegionalResult',
      'UpdateClientServices'                       => 'Mindbody\\API\\Service\\ClientService\\UpdateClientServices',
      'UpdateClientServicesRequest'                => 'Mindbody\\API\\Service\\ClientService\\UpdateClientServicesRequest',
      'UpdateClientServicesResponse'               => 'Mindbody\\API\\Service\\ClientService\\UpdateClientServicesResponse',
      'UpdateClientServicesResult'                 => 'Mindbody\\API\\Service\\ClientService\\UpdateClientServicesResult',
      'UploadClientDocument'                       => 'Mindbody\\API\\Service\\ClientService\\UploadClientDocument',
      'UploadClientDocumentRequest'                => 'Mindbody\\API\\Service\\ClientService\\UploadClientDocumentRequest',
      'UploadClientDocumentResponse'               => 'Mindbody\\API\\Service\\ClientService\\UploadClientDocumentResponse',
      'UploadClientDocumentResult'                 => 'Mindbody\\API\\Service\\ClientService\\UploadClientDocumentResult',
      'UploadClientPhoto'                          => 'Mindbody\\API\\Service\\ClientService\\UploadClientPhoto',
      'UploadClientPhotoRequest'                   => 'Mindbody\\API\\Service\\ClientService\\UploadClientPhotoRequest',
      'UploadClientPhotoResponse'                  => 'Mindbody\\API\\Service\\ClientService\\UploadClientPhotoResponse',
      'UploadClientPhotoResult'                    => 'Mindbody\\API\\Service\\ClientService\\UploadClientPhotoResult',
      'ValidateLogin'                              => 'Mindbody\\API\\Service\\ClientService\\ValidateLogin',
      'ValidateLoginRequest'                       => 'Mindbody\\API\\Service\\ClientService\\ValidateLoginRequest',
      'ValidateLoginResponse'                      => 'Mindbody\\API\\Service\\ClientService\\ValidateLoginResponse',
      'ValidateLoginResult'                        => 'Mindbody\\API\\Service\\ClientService\\ValidateLoginResult',
    );

   

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
