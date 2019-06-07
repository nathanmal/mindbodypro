<?php

namespace Mindbody\Service\StaffService;

class GetStaffPermissions
{

    /**
     * @var GetStaffPermissionsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetStaffPermissionsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffPermissionsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffPermissionsRequest $Request
     * @return \Mindbody\Service\StaffService\GetStaffPermissions
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
