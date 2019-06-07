<?php

namespace Mindbody\API\Service\ClassService;

class GetEnrollmentsResponse
{

    /**
     * @var GetEnrollmentsResult $GetEnrollmentsResult
     */
    protected $GetEnrollmentsResult = null;

    /**
     * @param GetEnrollmentsResult $GetEnrollmentsResult
     */
    public function __construct($GetEnrollmentsResult)
    {
      $this->GetEnrollmentsResult = $GetEnrollmentsResult;
    }

    /**
     * @return GetEnrollmentsResult
     */
    public function getGetEnrollmentsResult()
    {
      return $this->GetEnrollmentsResult;
    }

    /**
     * @param GetEnrollmentsResult $GetEnrollmentsResult
     * @return \Mindbody\Service\ClassService\GetEnrollmentsResponse
     */
    public function setGetEnrollmentsResult($GetEnrollmentsResult)
    {
      $this->GetEnrollmentsResult = $GetEnrollmentsResult;
      return $this;
    }

}
