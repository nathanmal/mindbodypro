<?php

namespace Mindbody\API\Service\ClientService;

class GetClientServices
{

    /**
     * @var GetClientServicesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientServicesRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
