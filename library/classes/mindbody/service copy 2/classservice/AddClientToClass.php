<?php

namespace Mindbody\Service\ClassService;

class AddClientToClass
{

    /**
     * @var AddClientToClassRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddClientToClassRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientToClassRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientToClassRequest $Request
     * @return \Mindbody\Service\ClassService\AddClientToClass
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
