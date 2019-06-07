<?php

namespace Mindbody\Service\ClassService;

class RemoveClientsFromClassesResponse
{

    /**
     * @var RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     */
    protected $RemoveClientsFromClassesResult = null;

    /**
     * @param RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     */
    public function __construct($RemoveClientsFromClassesResult)
    {
      $this->RemoveClientsFromClassesResult = $RemoveClientsFromClassesResult;
    }

    /**
     * @return RemoveClientsFromClassesResult
     */
    public function getRemoveClientsFromClassesResult()
    {
      return $this->RemoveClientsFromClassesResult;
    }

    /**
     * @param RemoveClientsFromClassesResult $RemoveClientsFromClassesResult
     * @return \Mindbody\Service\ClassService\RemoveClientsFromClassesResponse
     */
    public function setRemoveClientsFromClassesResult($RemoveClientsFromClassesResult)
    {
      $this->RemoveClientsFromClassesResult = $RemoveClientsFromClassesResult;
      return $this;
    }

}
