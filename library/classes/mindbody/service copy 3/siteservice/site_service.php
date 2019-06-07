<?php

namespace Mindbody\Service\SiteService;


/**
 * Provides methods and attributes relating to sites and locations.
 */
class Site_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetSites' => 'Mindbody\\Service\\SiteService\\GetSites',
      'GetSitesRequest' => 'Mindbody\\Service\\SiteService\\GetSitesRequest',
      'MBRequest' => 'Mindbody\\Service\\SiteService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\SiteService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\SiteService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\SiteService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\SiteService\\ArrayOfString',
      'GetSitesResponse' => 'Mindbody\\Service\\SiteService\\GetSitesResponse',
      'GetSitesResult' => 'Mindbody\\Service\\SiteService\\GetSitesResult',
      'MBResult' => 'Mindbody\\Service\\SiteService\\MBResult',
      'ArrayOfSite' => 'Mindbody\\Service\\SiteService\\ArrayOfSite',
      'Site' => 'Mindbody\\Service\\SiteService\\Site',
      'GetLocations' => 'Mindbody\\Service\\SiteService\\GetLocations',
      'GetLocationsRequest' => 'Mindbody\\Service\\SiteService\\GetLocationsRequest',
      'GetLocationsResponse' => 'Mindbody\\Service\\SiteService\\GetLocationsResponse',
      'GetLocationsResult' => 'Mindbody\\Service\\SiteService\\GetLocationsResult',
      'ArrayOfLocation' => 'Mindbody\\Service\\SiteService\\ArrayOfLocation',
      'Location' => 'Mindbody\\Service\\SiteService\\Location',
      'MBObject' => 'Mindbody\\Service\\SiteService\\MBObject',
      'GetActivationCode' => 'Mindbody\\Service\\SiteService\\GetActivationCode',
      'GetActivationCodeRequest' => 'Mindbody\\Service\\SiteService\\GetActivationCodeRequest',
      'GetActivationCodeResponse' => 'Mindbody\\Service\\SiteService\\GetActivationCodeResponse',
      'GetActivationCodeResult' => 'Mindbody\\Service\\SiteService\\GetActivationCodeResult',
      'GetPrograms' => 'Mindbody\\Service\\SiteService\\GetPrograms',
      'GetProgramsRequest' => 'Mindbody\\Service\\SiteService\\GetProgramsRequest',
      'GetProgramsResponse' => 'Mindbody\\Service\\SiteService\\GetProgramsResponse',
      'GetProgramsResult' => 'Mindbody\\Service\\SiteService\\GetProgramsResult',
      'ArrayOfProgram' => 'Mindbody\\Service\\SiteService\\ArrayOfProgram',
      'Program' => 'Mindbody\\Service\\SiteService\\Program',
      'GetSessionTypes' => 'Mindbody\\Service\\SiteService\\GetSessionTypes',
      'GetSessionTypesRequest' => 'Mindbody\\Service\\SiteService\\GetSessionTypesRequest',
      'GetSessionTypesResponse' => 'Mindbody\\Service\\SiteService\\GetSessionTypesResponse',
      'GetSessionTypesResult' => 'Mindbody\\Service\\SiteService\\GetSessionTypesResult',
      'ArrayOfSessionType' => 'Mindbody\\Service\\SiteService\\ArrayOfSessionType',
      'SessionType' => 'Mindbody\\Service\\SiteService\\SessionType',
      'GetResources' => 'Mindbody\\Service\\SiteService\\GetResources',
      'GetResourcesRequest' => 'Mindbody\\Service\\SiteService\\GetResourcesRequest',
      'GetResourcesResponse' => 'Mindbody\\Service\\SiteService\\GetResourcesResponse',
      'GetResourcesResult' => 'Mindbody\\Service\\SiteService\\GetResourcesResult',
      'ArrayOfResource' => 'Mindbody\\Service\\SiteService\\ArrayOfResource',
      'Resource' => 'Mindbody\\Service\\SiteService\\Resource',
      'GetRelationships' => 'Mindbody\\Service\\SiteService\\GetRelationships',
      'GetRelationshipsRequest' => 'Mindbody\\Service\\SiteService\\GetRelationshipsRequest',
      'GetRelationshipsResponse' => 'Mindbody\\Service\\SiteService\\GetRelationshipsResponse',
      'GetRelationshipsResult' => 'Mindbody\\Service\\SiteService\\GetRelationshipsResult',
      'ArrayOfRelationship' => 'Mindbody\\Service\\SiteService\\ArrayOfRelationship',
      'Relationship' => 'Mindbody\\Service\\SiteService\\Relationship',
      'GetResourceSchedule' => 'Mindbody\\Service\\SiteService\\GetResourceSchedule',
      'GetResourceScheduleRequest' => 'Mindbody\\Service\\SiteService\\GetResourceScheduleRequest',
      'GetResourceScheduleResponse' => 'Mindbody\\Service\\SiteService\\GetResourceScheduleResponse',
      'GetResourceScheduleResult' => 'Mindbody\\Service\\SiteService\\GetResourceScheduleResult',
      'ReserveResource' => 'Mindbody\\Service\\SiteService\\ReserveResource',
      'ReserveResourceRequest' => 'Mindbody\\Service\\SiteService\\ReserveResourceRequest',
      'ReserveResourceResponse' => 'Mindbody\\Service\\SiteService\\ReserveResourceResponse',
      'ReserveResourceResult' => 'Mindbody\\Service\\SiteService\\ReserveResourceResult',
      'GetMobileProviders' => 'Mindbody\\Service\\SiteService\\GetMobileProviders',
      'GetMobileProvidersRequest' => 'Mindbody\\Service\\SiteService\\GetMobileProvidersRequest',
      'GetMobileProvidersResponse' => 'Mindbody\\Service\\SiteService\\GetMobileProvidersResponse',
      'GetMobileProvidersResult' => 'Mindbody\\Service\\SiteService\\GetMobileProvidersResult',
      'ArrayOfMobileProvider' => 'Mindbody\\Service\\SiteService\\ArrayOfMobileProvider',
      'MobileProvider' => 'Mindbody\\Service\\SiteService\\MobileProvider',
      'GetProspectStages' => 'Mindbody\\Service\\SiteService\\GetProspectStages',
      'GetProspectStagesRequest' => 'Mindbody\\Service\\SiteService\\GetProspectStagesRequest',
      'GetProspectStagesResponse' => 'Mindbody\\Service\\SiteService\\GetProspectStagesResponse',
      'GetProspectStagesResult' => 'Mindbody\\Service\\SiteService\\GetProspectStagesResult',
      'ArrayOfProspectStage' => 'Mindbody\\Service\\SiteService\\ArrayOfProspectStage',
      'ProspectStage' => 'Mindbody\\Service\\SiteService\\ProspectStage',
      'GetGenders' => 'Mindbody\\Service\\SiteService\\GetGenders',
      'GetGendersRequest' => 'Mindbody\\Service\\SiteService\\GetGendersRequest',
      'GetGendersResponse' => 'Mindbody\\Service\\SiteService\\GetGendersResponse',
      'GetGendersResult' => 'Mindbody\\Service\\SiteService\\GetGendersResult',
      'ArrayOfGenderOption' => 'Mindbody\\Service\\SiteService\\ArrayOfGenderOption',
      'GenderOption' => 'Mindbody\\Service\\SiteService\\GenderOption',
      'Row' => 'Mindbody\\Service\\SiteService\\Row',
      'RecordSet' => 'Mindbody\\Service\\SiteService\\RecordSet',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of sites.
     *
     * @param GetSites $parameters
     * @return GetSitesResponse
     */
    public function GetSites(GetSites $parameters)
    {
      return $this->__soapCall('GetSites', array($parameters));
    }

    /**
     * Gets a list of locations.
     *
     * @param GetLocations $parameters
     * @return GetLocationsResponse
     */
    public function GetLocations(GetLocations $parameters)
    {
      return $this->__soapCall('GetLocations', array($parameters));
    }

    /**
     * Gets an activation code.
     *
     * @param GetActivationCode $parameters
     * @return GetActivationCodeResponse
     */
    public function GetActivationCode(GetActivationCode $parameters)
    {
      return $this->__soapCall('GetActivationCode', array($parameters));
    }

    /**
     * Gets a list of programs.
     *
     * @param GetPrograms $parameters
     * @return GetProgramsResponse
     */
    public function GetPrograms(GetPrograms $parameters)
    {
      return $this->__soapCall('GetPrograms', array($parameters));
    }

    /**
     * Gets a list of session types.
     *
     * @param GetSessionTypes $parameters
     * @return GetSessionTypesResponse
     */
    public function GetSessionTypes(GetSessionTypes $parameters)
    {
      return $this->__soapCall('GetSessionTypes', array($parameters));
    }

    /**
     * Gets a list of resources.
     *
     * @param GetResources $parameters
     * @return GetResourcesResponse
     */
    public function GetResources(GetResources $parameters)
    {
      return $this->__soapCall('GetResources', array($parameters));
    }

    /**
     * Gets a list of relationships.
     *
     * @param GetRelationships $parameters
     * @return GetRelationshipsResponse
     */
    public function GetRelationships(GetRelationships $parameters)
    {
      return $this->__soapCall('GetRelationships', array($parameters));
    }

    /**
     * Gets all resources schedule.
     *
     * @param GetResourceSchedule $parameters
     * @return GetResourceScheduleResponse
     */
    public function GetResourceSchedule(GetResourceSchedule $parameters)
    {
      return $this->__soapCall('GetResourceSchedule', array($parameters));
    }

    /**
     * Reserves a resource.
     *
     * @param ReserveResource $parameters
     * @return ReserveResourceResponse
     */
    public function ReserveResource(ReserveResource $parameters)
    {
      return $this->__soapCall('ReserveResource', array($parameters));
    }

    /**
     * Gets a list of active mobile providers.
     *
     * @param GetMobileProviders $parameters
     * @return GetMobileProvidersResponse
     */
    public function GetMobileProviders(GetMobileProviders $parameters)
    {
      return $this->__soapCall('GetMobileProviders', array($parameters));
    }

    /**
     * Gets a list of prospect stages for a site.
     *
     * @param GetProspectStages $parameters
     * @return GetProspectStagesResponse
     */
    public function GetProspectStages(GetProspectStages $parameters)
    {
      return $this->__soapCall('GetProspectStages', array($parameters));
    }

    /**
     * Gets a list of prospect stages for a site.
     *
     * @param GetGenders $parameters
     * @return GetGendersResponse
     */
    public function GetGenders(GetGenders $parameters)
    {
      return $this->__soapCall('GetGenders', array($parameters));
    }

}
