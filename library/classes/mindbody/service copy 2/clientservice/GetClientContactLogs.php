<?php

namespace Mindbody\Service\ClientService;

class GetClientContactLogs
{

    /**
     * @var GetClientContactLogsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClientContactLogsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientContactLogsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientContactLogsRequest $Request
     * @return \Mindbody\Service\ClientService\GetClientContactLogs
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
