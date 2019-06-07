<?php

namespace Mindbody\API\Service\ClientService;

class GetClientPurchasesResponse
{

    /**
     * @var GetClientPurchasesResult $GetClientPurchasesResult
     */
    protected $GetClientPurchasesResult = null;

    /**
     * @param GetClientPurchasesResult $GetClientPurchasesResult
     */
    public function __construct($GetClientPurchasesResult)
    {
      $this->GetClientPurchasesResult = $GetClientPurchasesResult;
    }

    /**
     * @return GetClientPurchasesResult
     */
    public function getGetClientPurchasesResult()
    {
      return $this->GetClientPurchasesResult;
    }

    /**
     * @param GetClientPurchasesResult $GetClientPurchasesResult
     * @return \Mindbody\Service\ClientService\GetClientPurchasesResponse
     */
    public function setGetClientPurchasesResult($GetClientPurchasesResult)
    {
      $this->GetClientPurchasesResult = $GetClientPurchasesResult;
      return $this;
    }

}
