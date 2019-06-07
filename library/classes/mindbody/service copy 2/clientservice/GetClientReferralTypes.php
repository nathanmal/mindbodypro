<?php

namespace Mindbody\Service\ClientService;

class GetClientReferralTypes
{

    /**
     * @var GetClientReferralTypesRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientReferralTypesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientReferralTypesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientReferralTypesRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientReferralTypes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
