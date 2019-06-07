<?php

namespace Mindbody\Service\SiteService;

class GetActivationCodeResult extends MBResult
{

    /**
     * @var string $ActivationCode
     */
    protected $ActivationCode = null;

    /**
     * @var string $ActivationLink
     */
    protected $ActivationLink = null;

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
     * @return string
     */
    public function getActivationCode()
    {
      return $this->ActivationCode;
    }

    /**
     * @param string $ActivationCode
     * @return \Mindbody\Service\SiteService\GetActivationCodeResult
     */
    public function setActivationCode($ActivationCode)
    {
      $this->ActivationCode = $ActivationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getActivationLink()
    {
      return $this->ActivationLink;
    }

    /**
     * @param string $ActivationLink
     * @return \Mindbody\Service\SiteService\GetActivationCodeResult
     */
    public function setActivationLink($ActivationLink)
    {
      $this->ActivationLink = $ActivationLink;
      return $this;
    }

}
