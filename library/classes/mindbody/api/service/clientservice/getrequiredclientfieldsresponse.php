<?php

namespace Mindbody\API\Service\ClientService;

class GetRequiredClientFieldsResponse
{

    /**
     * @var GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     */
    protected $GetRequiredClientFieldsResult = null;

    /**
     * @param GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     */
    public function __construct($GetRequiredClientFieldsResult)
    {
      $this->GetRequiredClientFieldsResult = $GetRequiredClientFieldsResult;
    }

    /**
     * @return GetRequiredClientFieldsResult
     */
    public function getGetRequiredClientFieldsResult()
    {
      return $this->GetRequiredClientFieldsResult;
    }

    /**
     * @param GetRequiredClientFieldsResult $GetRequiredClientFieldsResult
     * @return \Mindbody\Service\ClientService\GetRequiredClientFieldsResponse
     */
    public function setGetRequiredClientFieldsResult($GetRequiredClientFieldsResult)
    {
      $this->GetRequiredClientFieldsResult = $GetRequiredClientFieldsResult;
      return $this;
    }

}
