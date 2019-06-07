<?php

namespace Mindbody\API\Service\ClassService;

class AddClientToClassResponse
{

    /**
     * @var AddClientsToClassesResult $AddClientToClassResult
     */
    protected $AddClientToClassResult = null;

    /**
     * @param AddClientsToClassesResult $AddClientToClassResult
     */
    public function __construct($AddClientToClassResult)
    {
      $this->AddClientToClassResult = $AddClientToClassResult;
    }

    /**
     * @return AddClientsToClassesResult
     */
    public function getAddClientToClassResult()
    {
      return $this->AddClientToClassResult;
    }

    /**
     * @param AddClientsToClassesResult $AddClientToClassResult
     * @return \Mindbody\Service\ClassService\AddClientToClassResponse
     */
    public function setAddClientToClassResult($AddClientToClassResult)
    {
      $this->AddClientToClassResult = $AddClientToClassResult;
      return $this;
    }

}
