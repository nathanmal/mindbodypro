<?php

namespace Mindbody\Service\SaleService;

class GetServices
{

    /**
     * @var GetServicesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetServicesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetServicesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetServicesRequest $Request
     * @return \Mindbody\Service\SaleService\GetServices
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
