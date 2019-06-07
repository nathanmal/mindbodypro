<?php

namespace Mindbody\Service\StaffService;

class AddOrUpdateStaff
{

    /**
     * @var AddOrUpdateStaffRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddOrUpdateStaffRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateStaffRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateStaffRequest $Request
     * @return \Mindbody\Service\StaffService\AddOrUpdateStaff
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
