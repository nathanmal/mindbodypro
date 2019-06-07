<?php

namespace Mindbody\API\Service\StaffService;

class GetStaffPermissionsResponse
{

    /**
     * @var GetStaffPermissionsResult $GetStaffPermissionsResult
     */
    protected $GetStaffPermissionsResult = null;

    /**
     * @param GetStaffPermissionsResult $GetStaffPermissionsResult
     */
    public function __construct($GetStaffPermissionsResult)
    {
      $this->GetStaffPermissionsResult = $GetStaffPermissionsResult;
    }

    /**
     * @return GetStaffPermissionsResult
     */
    public function getGetStaffPermissionsResult()
    {
      return $this->GetStaffPermissionsResult;
    }

    /**
     * @param GetStaffPermissionsResult $GetStaffPermissionsResult
     * @return \Mindbody\Service\StaffService\GetStaffPermissionsResponse
     */
    public function setGetStaffPermissionsResult($GetStaffPermissionsResult)
    {
      $this->GetStaffPermissionsResult = $GetStaffPermissionsResult;
      return $this;
    }

}
