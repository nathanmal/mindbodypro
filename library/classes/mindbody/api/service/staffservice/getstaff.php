<?php

namespace Mindbody\API\Service\StaffService;

class GetStaff
{

    /**
     * @var GetStaffRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetStaffRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffRequest $Request
     * @return \Mindbody\Service\StaffService\GetStaff
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
