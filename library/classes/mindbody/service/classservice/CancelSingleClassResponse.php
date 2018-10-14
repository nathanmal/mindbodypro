<?php

namespace Mindbody\Service\ClassService;

class CancelSingleClassResponse
{

    /**
     * @var CancelSingleClassResult $CancelSingleClassResult
     */
    protected $CancelSingleClassResult = null;

    /**
     * @param CancelSingleClassResult $CancelSingleClassResult
     */
    public function __construct($CancelSingleClassResult)
    {
      $this->CancelSingleClassResult = $CancelSingleClassResult;
    }

    /**
     * @return CancelSingleClassResult
     */
    public function getCancelSingleClassResult()
    {
      return $this->CancelSingleClassResult;
    }

    /**
     * @param CancelSingleClassResult $CancelSingleClassResult
     * @return \Mindbody\Service\ClassService\CancelSingleClassResponse
     */
    public function setCancelSingleClassResult($CancelSingleClassResult)
    {
      $this->CancelSingleClassResult = $CancelSingleClassResult;
      return $this;
    }

}
