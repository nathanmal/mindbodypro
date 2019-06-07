<?php

namespace Mindbody\API\Service\ClientService;

class UpdateClientCrossRegional
{

    /**
     * @var UpdateClientCrossRegionalRequest $Request
     */
    protected $Request = null;

    /**
     * @param UpdateClientCrossRegionalRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateClientCrossRegionalRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateClientCrossRegionalRequest $Request
     * @return \Mindbody\Service\ClientService\UpdateClientCrossRegional
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
