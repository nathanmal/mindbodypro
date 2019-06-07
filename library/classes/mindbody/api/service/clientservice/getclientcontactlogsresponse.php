<?php

namespace Mindbody\API\Service\ClientService;

class GetClientContactLogsResponse
{

    /**
     * @var GetClientContactLogsResult $GetClientContactLogsResult
     */
    protected $GetClientContactLogsResult = null;

    /**
     * @param GetClientContactLogsResult $GetClientContactLogsResult
     */
    public function __construct($GetClientContactLogsResult)
    {
      $this->GetClientContactLogsResult = $GetClientContactLogsResult;
    }

    /**
     * @return GetClientContactLogsResult
     */
    public function getGetClientContactLogsResult()
    {
      return $this->GetClientContactLogsResult;
    }

    /**
     * @param GetClientContactLogsResult $GetClientContactLogsResult
     * @return \Mindbody\Service\ClientService\GetClientContactLogsResponse
     */
    public function setGetClientContactLogsResult($GetClientContactLogsResult)
    {
      $this->GetClientContactLogsResult = $GetClientContactLogsResult;
      return $this;
    }

}
