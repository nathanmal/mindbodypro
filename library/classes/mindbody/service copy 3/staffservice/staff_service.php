<?php

namespace Mindbody\Service\StaffService;


/**
 * Provides methods and attributes relating to staff.
 */
class Staff_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetStaff' => 'Mindbody\\Service\\StaffService\\GetStaff',
      'GetStaffRequest' => 'Mindbody\\Service\\StaffService\\GetStaffRequest',
      'MBRequest' => 'Mindbody\\Service\\StaffService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\StaffService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\StaffService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\StaffService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\StaffService\\ArrayOfString',
      'ArrayOfLong' => 'Mindbody\\Service\\StaffService\\ArrayOfLong',
      'StaffCredentials' => 'Mindbody\\Service\\StaffService\\StaffCredentials',
      'ArrayOfStaffFilter' => 'Mindbody\\Service\\StaffService\\ArrayOfStaffFilter',
      'GetStaffResponse' => 'Mindbody\\Service\\StaffService\\GetStaffResponse',
      'GetStaffResult' => 'Mindbody\\Service\\StaffService\\GetStaffResult',
      'MBResult' => 'Mindbody\\Service\\StaffService\\MBResult',
      'ArrayOfStaff' => 'Mindbody\\Service\\StaffService\\ArrayOfStaff',
      'Staff' => 'Mindbody\\Service\\StaffService\\Staff',
      'MBObject' => 'Mindbody\\Service\\StaffService\\MBObject',
      'Site' => 'Mindbody\\Service\\StaffService\\Site',
      'Resource' => 'Mindbody\\Service\\StaffService\\Resource',
      'ClientService' => 'Mindbody\\Service\\StaffService\\ClientService',
      'Program' => 'Mindbody\\Service\\StaffService\\Program',
      'SalesRep' => 'Mindbody\\Service\\StaffService\\SalesRep',
      'Rep' => 'Mindbody\\Service\\StaffService\\Rep',
      'ClientRelationship' => 'Mindbody\\Service\\StaffService\\ClientRelationship',
      'Client' => 'Mindbody\\Service\\StaffService\\Client',
      'ArrayOfClientIndex' => 'Mindbody\\Service\\StaffService\\ArrayOfClientIndex',
      'ClientIndex' => 'Mindbody\\Service\\StaffService\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Mindbody\\Service\\StaffService\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Mindbody\\Service\\StaffService\\ClientIndexValue',
      'ClientCreditCard' => 'Mindbody\\Service\\StaffService\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Mindbody\\Service\\StaffService\\ArrayOfClientRelationship',
      'ArrayOfRep' => 'Mindbody\\Service\\StaffService\\ArrayOfRep',
      'ArrayOfSalesRep' => 'Mindbody\\Service\\StaffService\\ArrayOfSalesRep',
      'ArrayOfCustomClientField' => 'Mindbody\\Service\\StaffService\\ArrayOfCustomClientField',
      'CustomClientField' => 'Mindbody\\Service\\StaffService\\CustomClientField',
      'Liability' => 'Mindbody\\Service\\StaffService\\Liability',
      'ProspectStage' => 'Mindbody\\Service\\StaffService\\ProspectStage',
      'Location' => 'Mindbody\\Service\\StaffService\\Location',
      'Relationship' => 'Mindbody\\Service\\StaffService\\Relationship',
      'SessionType' => 'Mindbody\\Service\\StaffService\\SessionType',
      'ScheduleItem' => 'Mindbody\\Service\\StaffService\\ScheduleItem',
      'Appointment' => 'Mindbody\\Service\\StaffService\\Appointment',
      'ArrayOfResource' => 'Mindbody\\Service\\StaffService\\ArrayOfResource',
      'Unavailability' => 'Mindbody\\Service\\StaffService\\Unavailability',
      'Availability' => 'Mindbody\\Service\\StaffService\\Availability',
      'ArrayOfProgram' => 'Mindbody\\Service\\StaffService\\ArrayOfProgram',
      'ArrayOfAppointment' => 'Mindbody\\Service\\StaffService\\ArrayOfAppointment',
      'ArrayOfUnavailability' => 'Mindbody\\Service\\StaffService\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Mindbody\\Service\\StaffService\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Mindbody\\Service\\StaffService\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Mindbody\\Service\\StaffService\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Mindbody\\Service\\StaffService\\ProviderIDUpdate',
      'GetStaffPermissions' => 'Mindbody\\Service\\StaffService\\GetStaffPermissions',
      'GetStaffPermissionsRequest' => 'Mindbody\\Service\\StaffService\\GetStaffPermissionsRequest',
      'GetStaffPermissionsResponse' => 'Mindbody\\Service\\StaffService\\GetStaffPermissionsResponse',
      'GetStaffPermissionsResult' => 'Mindbody\\Service\\StaffService\\GetStaffPermissionsResult',
      'ArrayOfPermission' => 'Mindbody\\Service\\StaffService\\ArrayOfPermission',
      'Permission' => 'Mindbody\\Service\\StaffService\\Permission',
      'AddOrUpdateStaff' => 'Mindbody\\Service\\StaffService\\AddOrUpdateStaff',
      'AddOrUpdateStaffRequest' => 'Mindbody\\Service\\StaffService\\AddOrUpdateStaffRequest',
      'AddOrUpdateStaffResponse' => 'Mindbody\\Service\\StaffService\\AddOrUpdateStaffResponse',
      'AddOrUpdateStaffResult' => 'Mindbody\\Service\\StaffService\\AddOrUpdateStaffResult',
      'GetStaffImgURL' => 'Mindbody\\Service\\StaffService\\GetStaffImgURL',
      'GetStaffImgURLRequest' => 'Mindbody\\Service\\StaffService\\GetStaffImgURLRequest',
      'GetStaffImgURLResponse' => 'Mindbody\\Service\\StaffService\\GetStaffImgURLResponse',
      'GetStaffImgURLResult' => 'Mindbody\\Service\\StaffService\\GetStaffImgURLResult',
      'ValidateStaffLogin' => 'Mindbody\\Service\\StaffService\\ValidateStaffLogin',
      'ValidateLoginRequest' => 'Mindbody\\Service\\StaffService\\ValidateLoginRequest',
      'ValidateStaffLoginResponse' => 'Mindbody\\Service\\StaffService\\ValidateStaffLoginResponse',
      'ValidateLoginResult' => 'Mindbody\\Service\\StaffService\\ValidateLoginResult',
      'GetSalesReps' => 'Mindbody\\Service\\StaffService\\GetSalesReps',
      'GetSalesRepsRequest' => 'Mindbody\\Service\\StaffService\\GetSalesRepsRequest',
      'GetSalesRepsResponse' => 'Mindbody\\Service\\StaffService\\GetSalesRepsResponse',
      'GetSalesRepsResult' => 'Mindbody\\Service\\StaffService\\GetSalesRepsResult',
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
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of staff members.
     *
     * @param GetStaff $parameters
     * @return GetStaffResponse
     */
    public function GetStaff(GetStaff $parameters)
    {
      return $this->__soapCall('GetStaff', array($parameters));
    }

    /**
     * Gets a list of staff permissions based on the given staff member.
     *
     * @param GetStaffPermissions $parameters
     * @return GetStaffPermissionsResponse
     */
    public function GetStaffPermissions(GetStaffPermissions $parameters)
    {
      return $this->__soapCall('GetStaffPermissions', array($parameters));
    }

    /**
     * Add or update staff.
     *
     * @param AddOrUpdateStaff $parameters
     * @return AddOrUpdateStaffResponse
     */
    public function AddOrUpdateStaff(AddOrUpdateStaff $parameters)
    {
      return $this->__soapCall('AddOrUpdateStaff', array($parameters));
    }

    /**
     * Gets a staff member's image URL if it exists.
     *
     * @param GetStaffImgURL $parameters
     * @return GetStaffImgURLResponse
     */
    public function GetStaffImgURL(GetStaffImgURL $parameters)
    {
      return $this->__soapCall('GetStaffImgURL', array($parameters));
    }

    /**
     * Validates a username and password. This method returns the staff on success.
     *
     * @param ValidateStaffLogin $parameters
     * @return ValidateStaffLoginResponse
     */
    public function ValidateStaffLogin(ValidateStaffLogin $parameters)
    {
      return $this->__soapCall('ValidateStaffLogin', array($parameters));
    }

    /**
     * Gets a list of sales reps based on the requested rep IDs
     *
     * @param GetSalesReps $parameters
     * @return GetSalesRepsResponse
     */
    public function GetSalesReps(GetSalesReps $parameters)
    {
      return $this->__soapCall('GetSalesReps', array($parameters));
    }

}
