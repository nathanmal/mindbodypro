<?php

namespace Mindbody\API\Service\StaffService;

class GetStaffImgURLResponse
{

    /**
     * @var GetStaffImgURLResult $GetStaffImgURLResult
     */
    protected $GetStaffImgURLResult = null;

    /**
     * @param GetStaffImgURLResult $GetStaffImgURLResult
     */
    public function __construct($GetStaffImgURLResult)
    {
      $this->GetStaffImgURLResult = $GetStaffImgURLResult;
    }

    /**
     * @return GetStaffImgURLResult
     */
    public function getGetStaffImgURLResult()
    {
      return $this->GetStaffImgURLResult;
    }

    /**
     * @param GetStaffImgURLResult $GetStaffImgURLResult
     * @return \Mindbody\Service\StaffService\GetStaffImgURLResponse
     */
    public function setGetStaffImgURLResult($GetStaffImgURLResult)
    {
      $this->GetStaffImgURLResult = $GetStaffImgURLResult;
      return $this;
    }

}
