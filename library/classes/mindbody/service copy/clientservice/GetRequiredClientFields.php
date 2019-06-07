<?php

namespace Mindbody\Service\ClientService;

class GetRequiredClientFields
{

    /**
     * @var GetRequiredClientFieldsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetRequiredClientFieldsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetRequiredClientFieldsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetRequiredClientFieldsRequest $Request
     * @return \Mindbody\Service\ClientService\GetRequiredClientFields
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
