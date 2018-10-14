<?php

namespace Mindbody\Service\SiteService;

class ReserveResourceResponse
{

    /**
     * @var ReserveResourceResult $ReserveResourceResult
     */
    protected $ReserveResourceResult = null;

    /**
     * @param ReserveResourceResult $ReserveResourceResult
     */
    public function __construct($ReserveResourceResult)
    {
      $this->ReserveResourceResult = $ReserveResourceResult;
    }

    /**
     * @return ReserveResourceResult
     */
    public function getReserveResourceResult()
    {
      return $this->ReserveResourceResult;
    }

    /**
     * @param ReserveResourceResult $ReserveResourceResult
     * @return \Mindbody\Service\SiteService\ReserveResourceResponse
     */
    public function setReserveResourceResult($ReserveResourceResult)
    {
      $this->ReserveResourceResult = $ReserveResourceResult;
      return $this;
    }

}
