<?php

namespace Mindbody\API\Service\SiteService;

/**
 * Provides methods and attributes relating to sites and locations.
 */
class Site_x0020_Service extends \Mindbody\API\Common\MBService
{   
    /**
     * Name of the service
     * @var string
     */
    protected $servicename = 'SiteService';

    /**
     * Service-specific classes
     * @var array
     */
    protected $servicemap = array (
      'GetActivationCode'           => 'Mindbody\\API\\Service\\SiteService\\GetActivationCode',
      'GetActivationCodeRequest'    => 'Mindbody\\API\\Service\\SiteService\\GetActivationCodeRequest',
      'GetActivationCodeResponse'   => 'Mindbody\\API\\Service\\SiteService\\GetActivationCodeResponse',
      'GetActivationCodeResult'     => 'Mindbody\\API\\Service\\SiteService\\GetActivationCodeResult',
      'GetGenders'                  => 'Mindbody\\API\\Service\\SiteService\\GetGenders',
      'GetGendersRequest'           => 'Mindbody\\API\\Service\\SiteService\\GetGendersRequest',
      'GetGendersResponse'          => 'Mindbody\\API\\Service\\SiteService\\GetGendersResponse',
      'GetGendersResult'            => 'Mindbody\\API\\Service\\SiteService\\GetGendersResult',
      'GetLocations'                => 'Mindbody\\API\\Service\\SiteService\\GetLocations',
      'GetLocationsRequest'         => 'Mindbody\\API\\Service\\SiteService\\GetLocationsRequest',
      'GetLocationsResponse'        => 'Mindbody\\API\\Service\\SiteService\\GetLocationsResponse',
      'GetLocationsResult'          => 'Mindbody\\API\\Service\\SiteService\\GetLocationsResult',
      'GetMobileProviders'          => 'Mindbody\\API\\Service\\SiteService\\GetMobileProviders',
      'GetMobileProvidersRequest'   => 'Mindbody\\API\\Service\\SiteService\\GetMobileProvidersRequest',
      'GetMobileProvidersResponse'  => 'Mindbody\\API\\Service\\SiteService\\GetMobileProvidersResponse',
      'GetMobileProvidersResult'    => 'Mindbody\\API\\Service\\SiteService\\GetMobileProvidersResult',
      'GetPrograms'                 => 'Mindbody\\API\\Service\\SiteService\\GetPrograms',
      'GetProgramsRequest'          => 'Mindbody\\API\\Service\\SiteService\\GetProgramsRequest',
      'GetProgramsResponse'         => 'Mindbody\\API\\Service\\SiteService\\GetProgramsResponse',
      'GetProgramsResult'           => 'Mindbody\\API\\Service\\SiteService\\GetProgramsResult',
      'GetProspectStages'           => 'Mindbody\\API\\Service\\SiteService\\GetProspectStages',
      'GetProspectStagesRequest'    => 'Mindbody\\API\\Service\\SiteService\\GetProspectStagesRequest',
      'GetProspectStagesResponse'   => 'Mindbody\\API\\Service\\SiteService\\GetProspectStagesResponse',
      'GetProspectStagesResult'     => 'Mindbody\\API\\Service\\SiteService\\GetProspectStagesResult',
      'GetRelationships'            => 'Mindbody\\API\\Service\\SiteService\\GetRelationships',
      'GetRelationshipsRequest'     => 'Mindbody\\API\\Service\\SiteService\\GetRelationshipsRequest',
      'GetRelationshipsResponse'    => 'Mindbody\\API\\Service\\SiteService\\GetRelationshipsResponse',
      'GetRelationshipsResult'      => 'Mindbody\\API\\Service\\SiteService\\GetRelationshipsResult',
      'GetResources'                => 'Mindbody\\API\\Service\\SiteService\\GetResources',
      'GetResourceSchedule'         => 'Mindbody\\API\\Service\\SiteService\\GetResourceSchedule',
      'GetResourceScheduleRequest'  => 'Mindbody\\API\\Service\\SiteService\\GetResourceScheduleRequest',
      'GetResourceScheduleResponse' => 'Mindbody\\API\\Service\\SiteService\\GetResourceScheduleResponse',
      'GetResourceScheduleResult'   => 'Mindbody\\API\\Service\\SiteService\\GetResourceScheduleResult',
      'GetResourcesRequest'         => 'Mindbody\\API\\Service\\SiteService\\GetResourcesRequest',
      'GetResourcesResponse'        => 'Mindbody\\API\\Service\\SiteService\\GetResourcesResponse',
      'GetResourcesResult'          => 'Mindbody\\API\\Service\\SiteService\\GetResourcesResult',
      'GetSessionTypes'             => 'Mindbody\\API\\Service\\SiteService\\GetSessionTypes',
      'GetSessionTypesRequest'      => 'Mindbody\\API\\Service\\SiteService\\GetSessionTypesRequest',
      'GetSessionTypesResponse'     => 'Mindbody\\API\\Service\\SiteService\\GetSessionTypesResponse',
      'GetSessionTypesResult'       => 'Mindbody\\API\\Service\\SiteService\\GetSessionTypesResult',
      'GetSites'                    => 'Mindbody\\API\\Service\\SiteService\\GetSites',
      'GetSitesRequest'             => 'Mindbody\\API\\Service\\SiteService\\GetSitesRequest',
      'GetSitesResponse'            => 'Mindbody\\API\\Service\\SiteService\\GetSitesResponse',
      'GetSitesResult'              => 'Mindbody\\API\\Service\\SiteService\\GetSitesResult',
      'ReserveResource'             => 'Mindbody\\API\\Service\\SiteService\\ReserveResource',
      'ReserveResourceRequest'      => 'Mindbody\\API\\Service\\SiteService\\ReserveResourceRequest',
      'ReserveResourceResponse'     => 'Mindbody\\API\\Service\\SiteService\\ReserveResourceResponse',
      'ReserveResourceResult'       => 'Mindbody\\API\\Service\\SiteService\\ReserveResourceResult',
    );

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
