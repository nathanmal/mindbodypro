<?php

namespace Mindbody\Service\AppointmentService;

class AddOrUpdateAvailabilitiesResponse
{

    /**
     * @var AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     */
    protected $AddOrUpdateAvailabilitiesResult = null;

    /**
     * @param AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     */
    public function __construct($AddOrUpdateAvailabilitiesResult)
    {
      $this->AddOrUpdateAvailabilitiesResult = $AddOrUpdateAvailabilitiesResult;
    }

    /**
     * @return AddOrUpdateAvailabilitiesResult
     */
    public function getAddOrUpdateAvailabilitiesResult()
    {
      return $this->AddOrUpdateAvailabilitiesResult;
    }

    /**
     * @param AddOrUpdateAvailabilitiesResult $AddOrUpdateAvailabilitiesResult
     * @return \Mindbody\Service\AppointmentService\AddOrUpdateAvailabilitiesResponse
     */
    public function setAddOrUpdateAvailabilitiesResult($AddOrUpdateAvailabilitiesResult)
    {
      $this->AddOrUpdateAvailabilitiesResult = $AddOrUpdateAvailabilitiesResult;
      return $this;
    }

}
