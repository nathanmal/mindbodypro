<?php

namespace Mindbody\API\Service\SiteService;

class GetSessionTypes
{

    /**
     * @var GetSessionTypesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetSessionTypesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSessionTypesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSessionTypesRequest $Request
     * @return \Mindbody\Service\SiteService\GetSessionTypes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
