<?php

namespace Mindbody\API\Service\SiteService;

class GetGendersRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var boolean $IncludeInactive
     */
    protected $IncludeInactive = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIncludeInactive()
    {
      return $this->IncludeInactive;
    }

    /**
     * @param boolean $IncludeInactive
     * @return \Mindbody\Service\SiteService\GetGendersRequest
     */
    public function setIncludeInactive($IncludeInactive)
    {
      $this->IncludeInactive = $IncludeInactive;
      return $this;
    }

}
