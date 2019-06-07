<?php

namespace Mindbody\Service\AppointmentService;

class GetBookableItemsResponse
{

    /**
     * @var GetBookableItemsResult $GetBookableItemsResult
     */
    protected $GetBookableItemsResult = null;

    /**
     * @param GetBookableItemsResult $GetBookableItemsResult
     */
    public function __construct($GetBookableItemsResult)
    {
      $this->GetBookableItemsResult = $GetBookableItemsResult;
    }

    /**
     * @return GetBookableItemsResult
     */
    public function getGetBookableItemsResult()
    {
      return $this->GetBookableItemsResult;
    }

    /**
     * @param GetBookableItemsResult $GetBookableItemsResult
     * @return \Mindbody\Service\AppointmentService\GetBookableItemsResponse
     */
    public function setGetBookableItemsResult($GetBookableItemsResult)
    {
      $this->GetBookableItemsResult = $GetBookableItemsResult;
      return $this;
    }

}
