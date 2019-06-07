<?php

namespace Mindbody\Service\SiteService;

class GetSitesRequest extends MBRequest
{

    /**
     * @var string $SearchText
     */
    protected $SearchText = null;

    /**
     * @var int $RelatedSiteID
     */
    protected $RelatedSiteID = null;

    /**
     * @var boolean $ShowOnlyTotalWOD
     */
    protected $ShowOnlyTotalWOD = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return \Mindbody\Service\SiteService\GetSitesRequest
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelatedSiteID()
    {
      return $this->RelatedSiteID;
    }

    /**
     * @param int $RelatedSiteID
     * @return \Mindbody\Service\SiteService\GetSitesRequest
     */
    public function setRelatedSiteID($RelatedSiteID)
    {
      $this->RelatedSiteID = $RelatedSiteID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyTotalWOD()
    {
      return $this->ShowOnlyTotalWOD;
    }

    /**
     * @param boolean $ShowOnlyTotalWOD
     * @return \Mindbody\Service\SiteService\GetSitesRequest
     */
    public function setShowOnlyTotalWOD($ShowOnlyTotalWOD)
    {
      $this->ShowOnlyTotalWOD = $ShowOnlyTotalWOD;
      return $this;
    }

}
