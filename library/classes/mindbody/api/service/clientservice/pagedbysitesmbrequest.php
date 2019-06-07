<?php

namespace Mindbody\API\Service\ClientService;

class PagedBySitesMBRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var int $ClientAssociatedSitesOffset
     */
    protected $ClientAssociatedSitesOffset = null;

    /**
     * @param int $ClientAssociatedSitesOffset
     */
    public function __construct($ClientAssociatedSitesOffset)
    {
      parent::__construct();
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
    }

    /**
     * @return int
     */
    public function getClientAssociatedSitesOffset()
    {
      return $this->ClientAssociatedSitesOffset;
    }

    /**
     * @param int $ClientAssociatedSitesOffset
     * @return \Mindbody\Service\ClientService\PagedBySitesMBRequest
     */
    public function setClientAssociatedSitesOffset($ClientAssociatedSitesOffset)
    {
      $this->ClientAssociatedSitesOffset = $ClientAssociatedSitesOffset;
      return $this;
    }

}
