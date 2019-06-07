<?php

namespace Mindbody\Service\StaffService;

class GetStaffImgURL
{

    /**
     * @var GetStaffImgURLRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetStaffImgURLRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetStaffImgURLRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetStaffImgURLRequest $Request
     * @return \Mindbody\Service\StaffService\GetStaffImgURL
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
