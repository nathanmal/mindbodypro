<?php

namespace Mindbody\API\Service\SiteService;

class GetRelationships
{

    /**
     * @var GetRelationshipsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetRelationshipsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetRelationshipsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetRelationshipsRequest $Request
     * @return \Mindbody\Service\SiteService\GetRelationships
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
