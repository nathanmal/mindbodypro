<?php

namespace Mindbody\Service\ClientService;

class GetContactLogTypesResponse
{

    /**
     * @var GetContactLogTypesResult $GetContactLogTypesResult
     */
    protected $GetContactLogTypesResult = null;

    /**
     * @param GetContactLogTypesResult $GetContactLogTypesResult
     */
    public function __construct($GetContactLogTypesResult)
    {
      $this->GetContactLogTypesResult = $GetContactLogTypesResult;
    }

    /**
     * @return GetContactLogTypesResult
     */
    public function getGetContactLogTypesResult()
    {
      return $this->GetContactLogTypesResult;
    }

    /**
     * @param GetContactLogTypesResult $GetContactLogTypesResult
     * @return \Mindbody\Service\ClientService\GetContactLogTypesResponse
     */
    public function setGetContactLogTypesResult($GetContactLogTypesResult)
    {
      $this->GetContactLogTypesResult = $GetContactLogTypesResult;
      return $this;
    }

}
