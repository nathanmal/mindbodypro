<?php

namespace Mindbody\API\Service\SaleService;

class GetContracts
{

    /**
     * @var GetContractsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetContractsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetContractsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetContractsRequest $Request
     * @return \Mindbody\Service\SaleService\GetContracts
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
