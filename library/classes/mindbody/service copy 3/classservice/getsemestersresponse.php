<?php

namespace Mindbody\Service\ClassService;

class GetSemestersResponse
{

    /**
     * @var GetSemestersResult $GetSemestersResult
     */
    protected $GetSemestersResult = null;

    /**
     * @param GetSemestersResult $GetSemestersResult
     */
    public function __construct($GetSemestersResult)
    {
      $this->GetSemestersResult = $GetSemestersResult;
    }

    /**
     * @return GetSemestersResult
     */
    public function getGetSemestersResult()
    {
      return $this->GetSemestersResult;
    }

    /**
     * @param GetSemestersResult $GetSemestersResult
     * @return \Mindbody\Service\ClassService\GetSemestersResponse
     */
    public function setGetSemestersResult($GetSemestersResult)
    {
      $this->GetSemestersResult = $GetSemestersResult;
      return $this;
    }

}
