<?php

namespace Mindbody\API\Service\SaleService;

class GetPackages
{

    /**
     * @var GetPackagesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetPackagesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetPackagesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetPackagesRequest $Request
     * @return \Mindbody\Service\SaleService\GetPackages
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
