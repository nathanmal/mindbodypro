<?php

namespace Mindbody\Service\SaleService;

class UpdateSaleDate
{

    /**
     * @var UpdateSaleDateRequest $Request
     */
    protected $Request = null;

    /**
     * @param UpdateSaleDateRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UpdateSaleDateRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UpdateSaleDateRequest $Request
     * @return \Mindbody\Service\SaleService\UpdateSaleDate
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
