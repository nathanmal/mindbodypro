<?php

namespace Mindbody\API\Service\ClientService;

class GetClientIndexesRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var boolean $RequiredOnly
     */
    protected $RequiredOnly = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getRequiredOnly()
    {
      return $this->RequiredOnly;
    }

    /**
     * @param boolean $RequiredOnly
     * @return \Mindbody\Service\ClientService\GetClientIndexesRequest
     */
    public function setRequiredOnly($RequiredOnly)
    {
      $this->RequiredOnly = $RequiredOnly;
      return $this;
    }

}
