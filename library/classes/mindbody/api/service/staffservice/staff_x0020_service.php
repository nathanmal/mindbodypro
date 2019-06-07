<?php

namespace Mindbody\API\Service\StaffService;
/**
 * Provides methods and attributes relating to staff.
 */
class Staff_x0020_Service extends \Mindbody\API\Common\MBService
{ 
    /**
     * Name of the service
     * @var string
     */
    protected $servicename = 'StaffService';

    /**
     * Service-specific classes
     * @var array
     */
    protected $servicemap = array (
      'AddOrUpdateStaff'            => 'Mindbody\\API\\Service\\StaffService\\AddOrUpdateStaff',
      'AddOrUpdateStaffRequest'     => 'Mindbody\\API\\Service\\StaffService\\AddOrUpdateStaffRequest',
      'AddOrUpdateStaffResponse'    => 'Mindbody\\API\\Service\\StaffService\\AddOrUpdateStaffResponse',
      'AddOrUpdateStaffResult'      => 'Mindbody\\API\\Service\\StaffService\\AddOrUpdateStaffResult',
      'GetSalesReps'                => 'Mindbody\\API\\Service\\StaffService\\GetSalesReps',
      'GetSalesRepsRequest'         => 'Mindbody\\API\\Service\\StaffService\\GetSalesRepsRequest',
      'GetSalesRepsResponse'        => 'Mindbody\\API\\Service\\StaffService\\GetSalesRepsResponse',
      'GetSalesRepsResult'          => 'Mindbody\\API\\Service\\StaffService\\GetSalesRepsResult',
      'GetStaff'                    => 'Mindbody\\API\\Service\\StaffService\\GetStaff',
      'GetStaffImgURL'              => 'Mindbody\\API\\Service\\StaffService\\GetStaffImgURL',
      'GetStaffImgURLRequest'       => 'Mindbody\\API\\Service\\StaffService\\GetStaffImgURLRequest',
      'GetStaffImgURLResponse'      => 'Mindbody\\API\\Service\\StaffService\\GetStaffImgURLResponse',
      'GetStaffImgURLResult'        => 'Mindbody\\API\\Service\\StaffService\\GetStaffImgURLResult',
      'GetStaffPermissions'         => 'Mindbody\\API\\Service\\StaffService\\GetStaffPermissions',
      'GetStaffPermissionsRequest'  => 'Mindbody\\API\\Service\\StaffService\\GetStaffPermissionsRequest',
      'GetStaffPermissionsResponse' => 'Mindbody\\API\\Service\\StaffService\\GetStaffPermissionsResponse',
      'GetStaffPermissionsResult'   => 'Mindbody\\API\\Service\\StaffService\\GetStaffPermissionsResult',
      'GetStaffRequest'             => 'Mindbody\\API\\Service\\StaffService\\GetStaffRequest',
      'GetStaffResponse'            => 'Mindbody\\API\\Service\\StaffService\\GetStaffResponse',
      'GetStaffResult'              => 'Mindbody\\API\\Service\\StaffService\\GetStaffResult',
      'ValidateLoginRequest'        => 'Mindbody\\API\\Service\\StaffService\\ValidateLoginRequest',
      'ValidateLoginResult'         => 'Mindbody\\API\\Service\\StaffService\\ValidateLoginResult',
      'ValidateStaffLogin'          => 'Mindbody\\API\\Service\\StaffService\\ValidateStaffLogin',
      'ValidateStaffLoginResponse'  => 'Mindbody\\API\\Service\\StaffService\\ValidateStaffLoginResponse',
    );

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
