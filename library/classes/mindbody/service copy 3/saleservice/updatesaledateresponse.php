<?php

namespace Mindbody\Service\SaleService;

class UpdateSaleDateResponse
{

    /**
     * @var UpdateSaleDateResult $UpdateSaleDateResult
     */
    protected $UpdateSaleDateResult = null;

    /**
     * @param UpdateSaleDateResult $UpdateSaleDateResult
     */
    public function __construct($UpdateSaleDateResult)
    {
      $this->UpdateSaleDateResult = $UpdateSaleDateResult;
    }

    /**
     * @return UpdateSaleDateResult
     */
    public function getUpdateSaleDateResult()
    {
      return $this->UpdateSaleDateResult;
    }

    /**
     * @param UpdateSaleDateResult $UpdateSaleDateResult
     * @return \Mindbody\Service\SaleService\UpdateSaleDateResponse
     */
    public function setUpdateSaleDateResult($UpdateSaleDateResult)
    {
      $this->UpdateSaleDateResult = $UpdateSaleDateResult;
      return $this;
    }

}
