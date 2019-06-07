<?php

namespace Mindbody\Service\ClientService;

class GetCrossRegionalClientAssociations
{

    /**
     * @var GetCrossRegionalClientAssociationsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetCrossRegionalClientAssociationsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetCrossRegionalClientAssociationsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetCrossRegionalClientAssociationsRequest $Request
     * @return \Mindbody\Service\ClientService\GetCrossRegionalClientAssociations
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
