<?php

namespace Mindbody\API\Service\ClassService;

class SubstituteClassTeacher
{

    /**
     * @var SubstituteClassTeacherRequest $Request
     */
    protected $Request = null;

    /**
     * @param SubstituteClassTeacherRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return SubstituteClassTeacherRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param SubstituteClassTeacherRequest $Request
     * @return \Mindbody\Service\ClassService\SubstituteClassTeacher
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
