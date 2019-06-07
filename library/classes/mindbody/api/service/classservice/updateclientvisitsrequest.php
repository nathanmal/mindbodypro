<?php

namespace Mindbody\API\Service\ClassService;

class UpdateClientVisitsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfVisit $Visits
     */
    protected $Visits = null;

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    /**
     * @var boolean $SendEmail
     */
    protected $SendEmail = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfVisit
     */
    public function getVisits()
    {
      return $this->Visits;
    }

    /**
     * @param ArrayOfVisit $Visits
     * @return \Mindbody\Service\ClassService\UpdateClientVisitsRequest
     */
    public function setVisits($Visits)
    {
      $this->Visits = $Visits;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Mindbody\Service\ClassService\UpdateClientVisitsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->SendEmail;
    }

    /**
     * @param boolean $SendEmail
     * @return \Mindbody\Service\ClassService\UpdateClientVisitsRequest
     */
    public function setSendEmail($SendEmail)
    {
      $this->SendEmail = $SendEmail;
      return $this;
    }

}
