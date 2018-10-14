<?php

namespace Mindbody\Service\AppointmentService;

class Rep extends MBObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var Staff $Staff
     */
    protected $Staff = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Mindbody\Service\AppointmentService\Rep
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff $Staff
     * @return \Mindbody\Service\AppointmentService\Rep
     */
    public function setStaff($Staff)
    {
      $this->Staff = $Staff;
      return $this;
    }

}
