<?php

namespace Mindbody\Service\StaffService;

class ValidateStaffLogin
{

    /**
     * @var ValidateLoginRequest $Request
     */
    protected $Request = null;

    /**
     * @param ValidateLoginRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ValidateLoginRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ValidateLoginRequest $Request
     * @return \Mindbody\Service\StaffService\ValidateStaffLogin
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
