<?php

namespace Mindbody\API\Service\SiteService;

class GetSites
{

    /**
     * @var GetSitesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetSitesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetSitesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetSitesRequest $Request
     * @return \Mindbody\Service\SiteService\GetSites
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
