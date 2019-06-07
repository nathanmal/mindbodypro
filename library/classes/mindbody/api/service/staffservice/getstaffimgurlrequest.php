<?php

namespace Mindbody\API\Service\StaffService;

class GetStaffImgURLRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var int $StaffID
     */
    protected $StaffID = null;

    /**
     * @param int $StaffID
     */
    public function __construct($StaffID)
    {
      parent::__construct();
      $this->StaffID = $StaffID;
    }

    /**
     * @return int
     */
    public function getStaffID()
    {
      return $this->StaffID;
    }

    /**
     * @param int $StaffID
     * @return \Mindbody\Service\StaffService\GetStaffImgURLRequest
     */
    public function setStaffID($StaffID)
    {
      $this->StaffID = $StaffID;
      return $this;
    }

}
