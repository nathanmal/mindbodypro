<?php

namespace Mindbody\API\Service\ClassService;

class GetClassDescriptionsResponse
{

    /**
     * @var GetClassDescriptionsResult $GetClassDescriptionsResult
     */
    protected $GetClassDescriptionsResult = null;

    /**
     * @param GetClassDescriptionsResult $GetClassDescriptionsResult
     */
    public function __construct($GetClassDescriptionsResult)
    {
      $this->GetClassDescriptionsResult = $GetClassDescriptionsResult;
    }

    /**
     * @return GetClassDescriptionsResult
     */
    public function getGetClassDescriptionsResult()
    {
      return $this->GetClassDescriptionsResult;
    }

    /**
     * @param GetClassDescriptionsResult $GetClassDescriptionsResult
     * @return \Mindbody\Service\ClassService\GetClassDescriptionsResponse
     */
    public function setGetClassDescriptionsResult($GetClassDescriptionsResult)
    {
      $this->GetClassDescriptionsResult = $GetClassDescriptionsResult;
      return $this;
    }

}
