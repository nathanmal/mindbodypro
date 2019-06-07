<?php

namespace Mindbody\Service\SiteService;

class GetPrograms
{

    /**
     * @var GetProgramsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetProgramsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetProgramsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetProgramsRequest $Request
     * @return \Mindbody\Service\SiteService\GetPrograms
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
