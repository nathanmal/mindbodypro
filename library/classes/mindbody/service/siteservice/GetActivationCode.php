<?php

namespace Mindbody\Service\SiteService;

class GetActivationCode
{

    /**
     * @var GetActivationCodeRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetActivationCodeRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetActivationCodeRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetActivationCodeRequest $Request
     * @return \Mindbody\Service\SiteService\GetActivationCode
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
