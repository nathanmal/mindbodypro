<?php

namespace Mindbody\Service\ClassService;

class SubtituteClassTeacherResponse
{

    /**
     * @var SubstituteClassTeacherResult $SubtituteClassTeacherResult
     */
    protected $SubtituteClassTeacherResult = null;

    /**
     * @param SubstituteClassTeacherResult $SubtituteClassTeacherResult
     */
    public function __construct($SubtituteClassTeacherResult)
    {
      $this->SubtituteClassTeacherResult = $SubtituteClassTeacherResult;
    }

    /**
     * @return SubstituteClassTeacherResult
     */
    public function getSubtituteClassTeacherResult()
    {
      return $this->SubtituteClassTeacherResult;
    }

    /**
     * @param SubstituteClassTeacherResult $SubtituteClassTeacherResult
     * @return \Mindbody\Service\ClassService\SubtituteClassTeacherResponse
     */
    public function setSubtituteClassTeacherResult($SubtituteClassTeacherResult)
    {
      $this->SubtituteClassTeacherResult = $SubtituteClassTeacherResult;
      return $this;
    }

}
