<?php

namespace Mindbody\API\Service\ClassService;

class RemoveFromWaitlistRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfInt $WaitlistEntryIDs
     */
    protected $WaitlistEntryIDs = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getWaitlistEntryIDs()
    {
      return $this->WaitlistEntryIDs;
    }

    /**
     * @param ArrayOfInt $WaitlistEntryIDs
     * @return \Mindbody\Service\ClassService\RemoveFromWaitlistRequest
     */
    public function setWaitlistEntryIDs($WaitlistEntryIDs)
    {
      $this->WaitlistEntryIDs = $WaitlistEntryIDs;
      return $this;
    }

}
