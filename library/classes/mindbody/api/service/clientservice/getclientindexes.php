<?php

namespace Mindbody\API\Service\ClientService;

class GetClientIndexes
{

    /**
     * @var GetClientIndexesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientIndexesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientIndexesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientIndexesRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientIndexes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
