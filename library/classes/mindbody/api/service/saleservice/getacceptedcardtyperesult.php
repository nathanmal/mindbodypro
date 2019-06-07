<?php

namespace Mindbody\API\Service\SaleService;

class GetAcceptedCardTypeResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfString $CardTypes
     */
    protected $CardTypes = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfString
     */
    public function getCardTypes()
    {
      return $this->CardTypes;
    }

    /**
     * @param ArrayOfString $CardTypes
     * @return \Mindbody\Service\SaleService\GetAcceptedCardTypeResult
     */
    public function setCardTypes($CardTypes)
    {
      $this->CardTypes = $CardTypes;
      return $this;
    }

}
