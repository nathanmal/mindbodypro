<?php

namespace Mindbody\Service\AppointmentService;

class MBResult
{

    /**
     * @var StatusCode $Status
     */
    protected $Status = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var XMLDetailLevel $XMLDetail
     */
    protected $XMLDetail = null;

    /**
     * @var int $ResultCount
     */
    protected $ResultCount = null;

    /**
     * @var int $CurrentPageIndex
     */
    protected $CurrentPageIndex = null;

    /**
     * @var int $TotalPageCount
     */
    protected $TotalPageCount = null;

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
      $this->Status = $Status;
      $this->ErrorCode = $ErrorCode;
      $this->XMLDetail = $XMLDetail;
      $this->ResultCount = $ResultCount;
      $this->CurrentPageIndex = $CurrentPageIndex;
      $this->TotalPageCount = $TotalPageCount;
    }

    /**
     * @return StatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StatusCode $Status
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return XMLDetailLevel
     */
    public function getXMLDetail()
    {
      return $this->XMLDetail;
    }

    /**
     * @param XMLDetailLevel $XMLDetail
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setXMLDetail($XMLDetail)
    {
      $this->XMLDetail = $XMLDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
      return $this->ResultCount;
    }

    /**
     * @param int $ResultCount
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setResultCount($ResultCount)
    {
      $this->ResultCount = $ResultCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPageIndex()
    {
      return $this->CurrentPageIndex;
    }

    /**
     * @param int $CurrentPageIndex
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setCurrentPageIndex($CurrentPageIndex)
    {
      $this->CurrentPageIndex = $CurrentPageIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPageCount()
    {
      return $this->TotalPageCount;
    }

    /**
     * @param int $TotalPageCount
     * @return \Mindbody\Service\AppointmentService\MBResult
     */
    public function setTotalPageCount($TotalPageCount)
    {
      $this->TotalPageCount = $TotalPageCount;
      return $this;
    }

}
