<?php

namespace Mindbody\Service\ClientService;

class Program extends MBObject
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ScheduleType $ScheduleType
     */
    protected $ScheduleType = null;

    /**
     * @var int $CancelOffset
     */
    protected $CancelOffset = null;

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
     * @return \Mindbody\Service\ClientService\Program
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Mindbody\Service\ClientService\Program
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ScheduleType
     */
    public function getScheduleType()
    {
      return $this->ScheduleType;
    }

    /**
     * @param ScheduleType $ScheduleType
     * @return \Mindbody\Service\ClientService\Program
     */
    public function setScheduleType($ScheduleType)
    {
      $this->ScheduleType = $ScheduleType;
      return $this;
    }

    /**
     * @return int
     */
    public function getCancelOffset()
    {
      return $this->CancelOffset;
    }

    /**
     * @param int $CancelOffset
     * @return \Mindbody\Service\ClientService\Program
     */
    public function setCancelOffset($CancelOffset)
    {
      $this->CancelOffset = $CancelOffset;
      return $this;
    }

}
