<?php

namespace Mindbody\API\Service\SaleService;

class UpdateServicesRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfService $Services
     */
    protected $Services = null;

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfService $Services
     * @return \Mindbody\Service\SaleService\UpdateServicesRequest
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
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
     * @return \Mindbody\Service\SaleService\UpdateServicesRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
