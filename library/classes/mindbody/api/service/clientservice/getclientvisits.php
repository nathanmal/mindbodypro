<?php

namespace Mindbody\API\Service\ClientService;

class GetClientVisits
{

    /**
     * @var GetClientVisitsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientVisitsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientVisitsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientVisitsRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientVisits
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
