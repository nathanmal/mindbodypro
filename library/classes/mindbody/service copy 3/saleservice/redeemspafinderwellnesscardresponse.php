<?php

namespace Mindbody\Service\SaleService;

class RedeemSpaFinderWellnessCardResponse
{

    /**
     * @var RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     */
    protected $RedeemSpaFinderWellnessCardResult = null;

    /**
     * @param RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     */
    public function __construct($RedeemSpaFinderWellnessCardResult)
    {
      $this->RedeemSpaFinderWellnessCardResult = $RedeemSpaFinderWellnessCardResult;
    }

    /**
     * @return RedeemSpaFinderWellnessCardResult
     */
    public function getRedeemSpaFinderWellnessCardResult()
    {
      return $this->RedeemSpaFinderWellnessCardResult;
    }

    /**
     * @param RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     * @return \Mindbody\Service\SaleService\RedeemSpaFinderWellnessCardResponse
     */
    public function setRedeemSpaFinderWellnessCardResult($RedeemSpaFinderWellnessCardResult)
    {
      $this->RedeemSpaFinderWellnessCardResult = $RedeemSpaFinderWellnessCardResult;
      return $this;
    }

}
