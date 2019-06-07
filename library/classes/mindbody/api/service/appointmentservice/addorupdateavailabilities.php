<?php

namespace Mindbody\API\Service\AppointmentService;

class AddOrUpdateAvailabilities
{

    /**
     * @var AddOrUpdateAvailabilitiesRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddOrUpdateAvailabilitiesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddOrUpdateAvailabilitiesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddOrUpdateAvailabilitiesRequest $Request
     * @return \Mindbody\Service\AppointmentService\AddOrUpdateAvailabilities
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
