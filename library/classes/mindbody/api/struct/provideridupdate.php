<?php

namespace Mindbody\API\Struct;

class ProviderIDUpdate
{

    /**
     * @var string $OldProviderID
     */
    protected $OldProviderID = null;

    /**
     * @var string $NewProviderID
     */
    protected $NewProviderID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOldProviderID()
    {
      return $this->OldProviderID;
    }

    /**
     * @param string $OldProviderID
     * @return \Mindbody\Service\AppointmentService\ProviderIDUpdate
     */
    public function setOldProviderID($OldProviderID)
    {
      $this->OldProviderID = $OldProviderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewProviderID()
    {
      return $this->NewProviderID;
    }

    /**
     * @param string $NewProviderID
     * @return \Mindbody\Service\AppointmentService\ProviderIDUpdate
     */
    public function setNewProviderID($NewProviderID)
    {
      $this->NewProviderID = $NewProviderID;
      return $this;
    }

}
