<?php

namespace Mindbody\API\Service\StaffService;

class GetStaffResponse
{

    /**
     * @var GetStaffResult $GetStaffResult
     */
    protected $GetStaffResult = null;

    /**
     * @param GetStaffResult $GetStaffResult
     */
    public function __construct($GetStaffResult)
    {
      $this->GetStaffResult = $GetStaffResult;
    }

    /**
     * @return GetStaffResult
     */
    public function getGetStaffResult()
    {
      return $this->GetStaffResult;
    }

    /**
     * @param GetStaffResult $GetStaffResult
     * @return \Mindbody\Service\StaffService\GetStaffResponse
     */
    public function setGetStaffResult($GetStaffResult)
    {
      $this->GetStaffResult = $GetStaffResult;
      return $this;
    }

}
