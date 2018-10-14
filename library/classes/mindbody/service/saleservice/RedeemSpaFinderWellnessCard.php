<?php

namespace Mindbody\Service\SaleService;

class RedeemSpaFinderWellnessCard
{

    /**
     * @var RedeemSpaFinderWellnessCardRequest $Request
     */
    protected $Request = null;

    /**
     * @param RedeemSpaFinderWellnessCardRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return RedeemSpaFinderWellnessCardRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RedeemSpaFinderWellnessCardRequest $Request
     * @return \Mindbody\Service\SaleService\RedeemSpaFinderWellnessCard
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
