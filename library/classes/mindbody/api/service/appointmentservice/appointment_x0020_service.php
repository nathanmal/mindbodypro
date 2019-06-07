<?php

namespace Mindbody\API\Service\AppointmentService;

/**
 * Provides methods and attributes relating to appointments.
 */
class Appointment_x0020_Service extends \Mindbody\API\Common\MBService
{   
    /**
     * Name of the service
     * @var [type]
     */
    protected $servicename = 'AppointmentService';

    /**
     * Service-specific classes
     * @var array
     */
    protected $servicemap = array (
      'AddOrUpdateAppointments'           => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAppointments',
      'AddOrUpdateAppointmentsRequest'    => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAppointmentsRequest',
      'AddOrUpdateAppointmentsResponse'   => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAppointmentsResponse',
      'AddOrUpdateAppointmentsResult'     => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAppointmentsResult',
      'AddOrUpdateAvailabilities'         => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAvailabilities',
      'AddOrUpdateAvailabilitiesRequest'  => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesRequest',
      'AddOrUpdateAvailabilitiesResponse' => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesResponse',
      'AddOrUpdateAvailabilitiesResult'   => 'Mindbody\\API\\Service\\AppointmentService\\AddOrUpdateAvailabilitiesResult',
      'GetActiveSessionTimes'             => 'Mindbody\\API\\Service\\AppointmentService\\GetActiveSessionTimes',
      'GetActiveSessionTimesRequest'      => 'Mindbody\\API\\Service\\AppointmentService\\GetActiveSessionTimesRequest',
      'GetActiveSessionTimesResponse'     => 'Mindbody\\API\\Service\\AppointmentService\\GetActiveSessionTimesResponse',
      'GetActiveSessionTimesResult'       => 'Mindbody\\API\\Service\\AppointmentService\\GetActiveSessionTimesResult',
      'GetAppointmentOptions'             => 'Mindbody\\API\\Service\\AppointmentService\\GetAppointmentOptions',
      'GetAppointmentOptionsRequest'      => 'Mindbody\\API\\Service\\AppointmentService\\GetAppointmentOptionsRequest',
      'GetAppointmentOptionsResponse'     => 'Mindbody\\API\\Service\\AppointmentService\\GetAppointmentOptionsResponse',
      'GetAppointmentOptionsResult'       => 'Mindbody\\API\\Service\\AppointmentService\\GetAppointmentOptionsResult',
      'GetBookableItems'                  => 'Mindbody\\API\\Service\\AppointmentService\\GetBookableItems',
      'GetBookableItemsRequest'           => 'Mindbody\\API\\Service\\AppointmentService\\GetBookableItemsRequest',
      'GetBookableItemsResponse'          => 'Mindbody\\API\\Service\\AppointmentService\\GetBookableItemsResponse',
      'GetBookableItemsResult'            => 'Mindbody\\API\\Service\\AppointmentService\\GetBookableItemsResult',
      'GetScheduleItems'                  => 'Mindbody\\API\\Service\\AppointmentService\\GetScheduleItems',
      'GetScheduleItemsRequest'           => 'Mindbody\\API\\Service\\AppointmentService\\GetScheduleItemsRequest',
      'GetScheduleItemsResponse'          => 'Mindbody\\API\\Service\\AppointmentService\\GetScheduleItemsResponse',
      'GetScheduleItemsResult'            => 'Mindbody\\API\\Service\\AppointmentService\\GetScheduleItemsResult',
      'GetStaffAppointments'              => 'Mindbody\\API\\Service\\AppointmentService\\GetStaffAppointments',
      'GetStaffAppointmentsRequest'       => 'Mindbody\\API\\Service\\AppointmentService\\GetStaffAppointmentsRequest',
      'GetStaffAppointmentsResponse'      => 'Mindbody\\API\\Service\\AppointmentService\\GetStaffAppointmentsResponse',
      'GetStaffAppointmentsResult'        => 'Mindbody\\API\\Service\\AppointmentService\\GetStaffAppointmentsResult',
    );

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
