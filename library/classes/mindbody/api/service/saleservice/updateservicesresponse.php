<?php

namespace Mindbody\API\Service\SaleService;

class UpdateServicesResponse
{

    /**
     * @var UpdateServicesResult $UpdateServicesResult
     */
    protected $UpdateServicesResult = null;

    /**
     * @param UpdateServicesResult $UpdateServicesResult
     */
    public function __construct($UpdateServicesResult)
    {
      $this->UpdateServicesResult = $UpdateServicesResult;
    }

    /**
     * @return UpdateServicesResult
     */
    public function getUpdateServicesResult()
    {
      return $this->UpdateServicesResult;
    }

    /**
     * @param UpdateServicesResult $UpdateServicesResult
     * @return \Mindbody\Service\SaleService\UpdateServicesResponse
     */
    public function setUpdateServicesResult($UpdateServicesResult)
    {
      $this->UpdateServicesResult = $UpdateServicesResult;
      return $this;
    }

}
