<?php

namespace Mindbody\Service\ClientService;

class GetClientPurchases
{

    /**
     * @var GetClientPurchasesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientPurchasesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientPurchasesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientPurchasesRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientPurchases
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
