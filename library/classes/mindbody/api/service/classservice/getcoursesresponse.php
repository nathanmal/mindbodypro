<?php

namespace Mindbody\API\Service\ClassService;

class GetCoursesResponse
{

    /**
     * @var GetCoursesResult $GetCoursesResult
     */
    protected $GetCoursesResult = null;

    /**
     * @param GetCoursesResult $GetCoursesResult
     */
    public function __construct($GetCoursesResult)
    {
      $this->GetCoursesResult = $GetCoursesResult;
    }

    /**
     * @return GetCoursesResult
     */
    public function getGetCoursesResult()
    {
      return $this->GetCoursesResult;
    }

    /**
     * @param GetCoursesResult $GetCoursesResult
     * @return \Mindbody\Service\ClassService\GetCoursesResponse
     */
    public function setGetCoursesResult($GetCoursesResult)
    {
      $this->GetCoursesResult = $GetCoursesResult;
      return $this;
    }

}
