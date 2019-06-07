<?php

namespace Mindbody\API\Service\ClientService;

class GetCustomClientFieldsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfCustomClientField $CustomClientFields
     */
    protected $CustomClientFields = null;

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
     * @return ArrayOfCustomClientField
     */
    public function getCustomClientFields()
    {
      return $this->CustomClientFields;
    }

    /**
     * @param ArrayOfCustomClientField $CustomClientFields
     * @return \Mindbody\Service\ClientService\GetCustomClientFieldsResult
     */
    public function setCustomClientFields($CustomClientFields)
    {
      $this->CustomClientFields = $CustomClientFields;
      return $this;
    }

}
