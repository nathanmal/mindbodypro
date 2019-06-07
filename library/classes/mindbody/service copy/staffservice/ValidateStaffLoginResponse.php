<?php

namespace Mindbody\Service\StaffService;

class ValidateStaffLoginResponse
{

    /**
     * @var ValidateLoginResult $ValidateStaffLoginResult
     */
    protected $ValidateStaffLoginResult = null;

    /**
     * @param ValidateLoginResult $ValidateStaffLoginResult
     */
    public function __construct($ValidateStaffLoginResult)
    {
      $this->ValidateStaffLoginResult = $ValidateStaffLoginResult;
    }

    /**
     * @return ValidateLoginResult
     */
    public function getValidateStaffLoginResult()
    {
      return $this->ValidateStaffLoginResult;
    }

    /**
     * @param ValidateLoginResult $ValidateStaffLoginResult
     * @return \Mindbody\Service\StaffService\ValidateStaffLoginResponse
     */
    public function setValidateStaffLoginResult($ValidateStaffLoginResult)
    {
      $this->ValidateStaffLoginResult = $ValidateStaffLoginResult;
      return $this;
    }

}
