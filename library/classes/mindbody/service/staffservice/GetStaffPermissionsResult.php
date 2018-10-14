<?php

namespace Mindbody\Service\StaffService;

class GetStaffPermissionsResult extends MBResult
{

    /**
     * @var ArrayOfPermission $Permissions
     */
    protected $Permissions = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfPermission
     */
    public function getPermissions()
    {
      return $this->Permissions;
    }

    /**
     * @param ArrayOfPermission $Permissions
     * @return \Mindbody\Service\StaffService\GetStaffPermissionsResult
     */
    public function setPermissions($Permissions)
    {
      $this->Permissions = $Permissions;
      return $this;
    }

}
