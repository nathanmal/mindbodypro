<?php

namespace Mindbody\API\Service\ClassService;

class AddClientsToEnrollmentsResponse
{

    /**
     * @var AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     */
    protected $AddClientsToEnrollmentsResult = null;

    /**
     * @param AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     */
    public function __construct($AddClientsToEnrollmentsResult)
    {
      $this->AddClientsToEnrollmentsResult = $AddClientsToEnrollmentsResult;
    }

    /**
     * @return AddClientsToEnrollmentsResult
     */
    public function getAddClientsToEnrollmentsResult()
    {
      return $this->AddClientsToEnrollmentsResult;
    }

    /**
     * @param AddClientsToEnrollmentsResult $AddClientsToEnrollmentsResult
     * @return \Mindbody\Service\ClassService\AddClientsToEnrollmentsResponse
     */
    public function setAddClientsToEnrollmentsResult($AddClientsToEnrollmentsResult)
    {
      $this->AddClientsToEnrollmentsResult = $AddClientsToEnrollmentsResult;
      return $this;
    }

}
