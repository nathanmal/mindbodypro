<?php

namespace Mindbody\API\Service\ClassService;

class GetClassDescriptions
{

    /**
     * @var GetClassDescriptionsRequest $Request
     */
    protected $Request = null;

    /**
     * @param GetClassDescriptionsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassDescriptionsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassDescriptionsRequest $Request
     * @return \Mindbody\Service\ClassService\GetClassDescriptions
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
