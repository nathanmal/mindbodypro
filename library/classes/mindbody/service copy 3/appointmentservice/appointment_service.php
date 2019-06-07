<?php

namespace Mindbody\Service\AppointmentService;


/**
 * Provides methods and attributes relating to appointments.
 */
class Appointment_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetStaffAppointments' => 'Mindbody\\Service\\AppointmentService\\GetStaffAppointments',
      'GetStaffAppointmentsRequest' => 'Mindbody\\Service\\AppointmentService\\GetStaffAppointmentsRequest',
      'MBRequest' => 'Mindbody\\Service\\AppointmentService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\AppointmentService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\AppointmentService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\AppointmentService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\AppointmentService\\ArrayOfString',
      'StaffCredentials' => 'Mindbody\\Service\\AppointmentService\\StaffCredentials',
      'ArrayOfLong' => 'Mindbody\\Service\\AppointmentService\\ArrayOfLong',
      'GetStaffAppointmentsResponse' => 'Mindbody\\Service\\AppointmentService\\GetStaffAppointmentsResponse',
      'GetStaffAppointmentsResult' => 'Mindbody\\Service\\AppointmentService\\GetStaffAppointmentsResult',
      'MBResult' => 'Mindbody\\Service\\AppointmentService\\MBResult',
      'ArrayOfAppointment' => 'Mindbody\\Service\\AppointmentService\\ArrayOfAppointment',
      'Appointment' => 'Mindbody\\Service\\AppointmentService\\Appointment',
      'ScheduleItem' => 'Mindbody\\Service\\AppointmentService\\ScheduleItem',
      'MBObject' => 'Mindbody\\Service\\AppointmentService\\MBObject',
      'Site' => 'Mindbody\\Service\\AppointmentService\\Site',
      'Resource' => 'Mindbody\\Service\\AppointmentService\\Resource',
      'ClientService' => 'Mindbody\\Service\\AppointmentService\\ClientService',
      'Program' => 'Mindbody\\Service\\AppointmentService\\Program',
      'SalesRep' => 'Mindbody\\Service\\AppointmentService\\SalesRep',
      'Rep' => 'Mindbody\\Service\\AppointmentService\\Rep',
      'Staff' => 'Mindbody\\Service\\AppointmentService\\Staff',
      'ArrayOfUnavailability' => 'Mindbody\\Service\\AppointmentService\\ArrayOfUnavailability',
      'Unavailability' => 'Mindbody\\Service\\AppointmentService\\Unavailability',
      'ArrayOfAvailability' => 'Mindbody\\Service\\AppointmentService\\ArrayOfAvailability',
      'Availability' => 'Mindbody\\Service\\AppointmentService\\Availability',
      'SessionType' => 'Mindbody\\Service\\AppointmentService\\SessionType',
      'ArrayOfProgram' => 'Mindbody\\Service\\AppointmentService\\ArrayOfProgram',
      'Location' => 'Mindbody\\Service\\AppointmentService\\Location',
      'ArrayOfLocation' => 'Mindbody\\Service\\AppointmentService\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Mindbody\\Service\\AppointmentService\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Mindbody\\Service\\AppointmentService\\ProviderIDUpdate',
      'ClientRelationship' => 'Mindbody\\Service\\AppointmentService\\ClientRelationship',
      'Client' => 'Mindbody\\Service\\AppointmentService\\Client',
      'ArrayOfClientIndex' => 'Mindbody\\Service\\AppointmentService\\ArrayOfClientIndex',
      'ClientIndex' => 'Mindbody\\Service\\AppointmentService\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Mindbody\\Service\\AppointmentService\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Mindbody\\Service\\AppointmentService\\ClientIndexValue',
      'ClientCreditCard' => 'Mindbody\\Service\\AppointmentService\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Mindbody\\Service\\AppointmentService\\ArrayOfClientRelationship',
      'ArrayOfRep' => 'Mindbody\\Service\\AppointmentService\\ArrayOfRep',
      'ArrayOfSalesRep' => 'Mindbody\\Service\\AppointmentService\\ArrayOfSalesRep',
      'ArrayOfCustomClientField' => 'Mindbody\\Service\\AppointmentService\\ArrayOfCustomClientField',
      'CustomClientField' => 'Mindbody\\Service\\AppointmentService\\CustomClientField',
      'Liability' => 'Mindbody\\Service\\AppointmentService\\Liability',
      'ProspectStage' => 'Mindbody\\Service\\AppointmentService\\ProspectStage',
      'Relationship' => 'Mindbody\\Service\\AppointmentService\\Relationship',
      'ArrayOfResource' => 'Mindbody\\Service\\AppointmentService\\ArrayOfResource',
      'AddOrUpdateAppointments' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAppointments',
      'AddOrUpdateAppointmentsRequest' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAppointmentsRequest',
      'AddOrUpdateAppointmentsResponse' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAppointmentsResponse',
      'AddOrUpdateAppointmentsResult' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAppointmentsResult',
      'GetBookableItems' => 'Mindbody\\Service\\AppointmentService\\GetBookableItems',
      'GetBookableItemsRequest' => 'Mindbody\\Service\\AppointmentService\\GetBookableItemsRequest',
      'GetBookableItemsResponse' => 'Mindbody\\Service\\AppointmentService\\GetBookableItemsResponse',
      'GetBookableItemsResult' => 'Mindbody\\Service\\AppointmentService\\GetBookableItemsResult',
      'ArrayOfScheduleItem' => 'Mindbody\\Service\\AppointmentService\\ArrayOfScheduleItem',
      'GetScheduleItems' => 'Mindbody\\Service\\AppointmentService\\GetScheduleItems',
      'GetScheduleItemsRequest' => 'Mindbody\\Service\\AppointmentService\\GetScheduleItemsRequest',
      'GetScheduleItemsResponse' => 'Mindbody\\Service\\AppointmentService\\GetScheduleItemsResponse',
      'GetScheduleItemsResult' => 'Mindbody\\Service\\AppointmentService\\GetScheduleItemsResult',
      'ArrayOfStaff' => 'Mindbody\\Service\\AppointmentService\\ArrayOfStaff',
      'AddOrUpdateAvailabilities' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAvailabilities',
      'AddOrUpdateAvailabilitiesRequest' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesRequest',
      'ArrayOfDayOfWeek' => 'Mindbody\\Service\\AppointmentService\\ArrayOfDayOfWeek',
      'AddOrUpdateAvailabilitiesResponse' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesResponse',
      'AddOrUpdateAvailabilitiesResult' => 'Mindbody\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesResult',
      'GetActiveSessionTimes' => 'Mindbody\\Service\\AppointmentService\\GetActiveSessionTimes',
      'GetActiveSessionTimesRequest' => 'Mindbody\\Service\\AppointmentService\\GetActiveSessionTimesRequest',
      'GetActiveSessionTimesResponse' => 'Mindbody\\Service\\AppointmentService\\GetActiveSessionTimesResponse',
      'GetActiveSessionTimesResult' => 'Mindbody\\Service\\AppointmentService\\GetActiveSessionTimesResult',
      'ArrayOfDateTime' => 'Mindbody\\Service\\AppointmentService\\ArrayOfDateTime',
      'GetAppointmentOptions' => 'Mindbody\\Service\\AppointmentService\\GetAppointmentOptions',
      'GetAppointmentOptionsRequest' => 'Mindbody\\Service\\AppointmentService\\GetAppointmentOptionsRequest',
      'GetAppointmentOptionsResponse' => 'Mindbody\\Service\\AppointmentService\\GetAppointmentOptionsResponse',
      'GetAppointmentOptionsResult' => 'Mindbody\\Service\\AppointmentService\\GetAppointmentOptionsResult',
      'ArrayOfOption' => 'Mindbody\\Service\\AppointmentService\\ArrayOfOption',
      'Option' => 'Mindbody\\Service\\AppointmentService\\Option',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/AppointmentService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of appointments that a given staff member is instructing.
     *
     * @param GetStaffAppointments $parameters
     * @return GetStaffAppointmentsResponse
     */
    public function GetStaffAppointments(GetStaffAppointments $parameters)
    {
      return $this->__soapCall('GetStaffAppointments', array($parameters));
    }

    /**
     * Adds or updates a list of appointments.
     *
     * @param AddOrUpdateAppointments $parameters
     * @return AddOrUpdateAppointmentsResponse
     */
    public function AddOrUpdateAppointments(AddOrUpdateAppointments $parameters)
    {
      return $this->__soapCall('AddOrUpdateAppointments', array($parameters));
    }

    /**
     * Gets a list of bookable items.
     *
     * @param GetBookableItems $parameters
     * @return GetBookableItemsResponse
     */
    public function GetBookableItems(GetBookableItems $parameters)
    {
      return $this->__soapCall('GetBookableItems', array($parameters));
    }

    /**
     * Gets a list of scheduled items (appointments, availabilities, and unavailabilities).
     *
     * @param GetScheduleItems $parameters
     * @return GetScheduleItemsResponse
     */
    public function GetScheduleItems(GetScheduleItems $parameters)
    {
      return $this->__soapCall('GetScheduleItems', array($parameters));
    }

    /**
     * Adds or updates a list of availabilities.
     *
     * @param AddOrUpdateAvailabilities $parameters
     * @return AddOrUpdateAvailabilitiesResponse
     */
    public function AddOrUpdateAvailabilities(AddOrUpdateAvailabilities $parameters)
    {
      return $this->__soapCall('AddOrUpdateAvailabilities', array($parameters));
    }

    /**
     * Gets a list of times that are active for a given program ID.
     *
     * @param GetActiveSessionTimes $parameters
     * @return GetActiveSessionTimesResponse
     */
    public function GetActiveSessionTimes(GetActiveSessionTimes $parameters)
    {
      return $this->__soapCall('GetActiveSessionTimes', array($parameters));
    }

    /**
     * Gets a list appointment options.
     *
     * @param GetAppointmentOptions $parameters
     * @return GetAppointmentOptionsResponse
     */
    public function GetAppointmentOptions(GetAppointmentOptions $parameters)
    {
      return $this->__soapCall('GetAppointmentOptions', array($parameters));
    }

}
