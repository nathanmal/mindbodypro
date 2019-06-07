<?php

namespace Mindbody\Service\ClassService;

class SubtituteClassTeacher
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
     * @return \Mindbody\Service\ClassService\SubtituteClassTeacher
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
