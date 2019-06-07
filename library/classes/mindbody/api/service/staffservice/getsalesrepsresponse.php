<?php

namespace Mindbody\API\Service\StaffService;

class GetSalesRepsResponse
{

    /**
     * @var GetSalesRepsResult $GetSalesRepsResult
     */
    protected $GetSalesRepsResult = null;

    /**
     * @param GetSalesRepsResult $GetSalesRepsResult
     */
    public function __construct($GetSalesRepsResult)
    {
      $this->GetSalesRepsResult = $GetSalesRepsResult;
    }

    /**
     * @return GetSalesRepsResult
     */
    public function getGetSalesRepsResult()
    {
      return $this->GetSalesRepsResult;
    }

    /**
     * @param GetSalesRepsResult $GetSalesRepsResult
     * @return \Mindbody\Service\StaffService\GetSalesRepsResponse
     */
    public function setGetSalesRepsResult($GetSalesRepsResult)
    {
      $this->GetSalesRepsResult = $GetSalesRepsResult;
      return $this;
    }

}
