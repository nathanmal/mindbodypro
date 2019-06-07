<?php

namespace Mindbody\API\Service\SiteService;

class GetResources
{

    /**
     * @var GetResourcesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetResourcesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetResourcesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetResourcesRequest $Request
     * @return \Mindbody\Service\SiteService\GetResources
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
