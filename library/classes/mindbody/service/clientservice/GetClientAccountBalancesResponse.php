<?php

namespace Mindbody\Service\ClientService;

class GetClientAccountBalancesResponse
{

    /**
     * @var GetClientAccountBalancesResult $GetClientAccountBalancesResult
     */
    protected $GetClientAccountBalancesResult = null;

    /**
     * @param GetClientAccountBalancesResult $GetClientAccountBalancesResult
     */
    public function __construct($GetClientAccountBalancesResult)
    {
      $this->GetClientAccountBalancesResult = $GetClientAccountBalancesResult;
    }

    /**
     * @return GetClientAccountBalancesResult
     */
    public function getGetClientAccountBalancesResult()
    {
      return $this->GetClientAccountBalancesResult;
    }

    /**
     * @param GetClientAccountBalancesResult $GetClientAccountBalancesResult
     * @return \Mindbody\Service\ClientService\GetClientAccountBalancesResponse
     */
    public function setGetClientAccountBalancesResult($GetClientAccountBalancesResult)
    {
      $this->GetClientAccountBalancesResult = $GetClientAccountBalancesResult;
      return $this;
    }

}
