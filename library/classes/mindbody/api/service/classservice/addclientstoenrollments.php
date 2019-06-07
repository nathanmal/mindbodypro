<?php

namespace Mindbody\API\Service\ClassService;

class AddClientsToEnrollments
{

    /**
     * @var AddClientsToEnrollmentsRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddClientsToEnrollmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientsToEnrollmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientsToEnrollmentsRequest $Request
     * @return \Mindbody\Service\ClassService\AddClientsToEnrollments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
