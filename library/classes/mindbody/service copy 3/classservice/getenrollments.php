<?php

namespace Mindbody\Service\ClassService;

class GetEnrollments
{

    /**
     * @var GetEnrollmentsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetEnrollmentsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetEnrollmentsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetEnrollmentsRequest $Request
     * @return \Mindbody\Service\ClassService\GetEnrollments
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
