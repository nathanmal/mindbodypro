<?php

namespace Mindbody\Service\ClientService;

class AddArrival
{

    /**
     * @var AddArrivalRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddArrivalRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddArrivalRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddArrivalRequest $Request
     * @return \Mindbody\Service\ClientService\AddArrival
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
