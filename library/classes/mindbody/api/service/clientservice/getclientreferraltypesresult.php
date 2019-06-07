<?php

namespace Mindbody\API\Service\ClientService;

class GetClientReferralTypesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfString $ReferralTypes
     */
    protected $ReferralTypes = null;

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
    public function getReferralTypes()
    {
      return $this->ReferralTypes;
    }

    /**
     * @param ArrayOfString $ReferralTypes
     * @return \Mindbody\Service\ClientService\GetClientReferralTypesResult
     */
    public function setReferralTypes($ReferralTypes)
    {
      $this->ReferralTypes = $ReferralTypes;
      return $this;
    }

}
