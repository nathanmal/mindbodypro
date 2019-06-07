<?php

namespace Mindbody\API\Service\SiteService;

class GetGenders
{

    /**
     * @var GetGendersRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetGendersRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetGendersRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetGendersRequest $Request
     * @return \Mindbody\Service\SiteService\GetGenders
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
