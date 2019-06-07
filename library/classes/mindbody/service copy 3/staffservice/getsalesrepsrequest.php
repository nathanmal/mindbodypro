<?php

namespace Mindbody\Service\StaffService;

class GetSalesRepsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $SalesRepNumbers
     */
    protected $SalesRepNumbers = null;

    /**
     * @var boolean $ShowActiveOnly
     */
    protected $ShowActiveOnly = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getSalesRepNumbers()
    {
      return $this->SalesRepNumbers;
    }

    /**
     * @param ArrayOfInt $SalesRepNumbers
     * @return \Mindbody\Service\StaffService\GetSalesRepsRequest
     */
    public function setSalesRepNumbers($SalesRepNumbers)
    {
      $this->SalesRepNumbers = $SalesRepNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowActiveOnly()
    {
      return $this->ShowActiveOnly;
    }

    /**
     * @param boolean $ShowActiveOnly
     * @return \Mindbody\Service\StaffService\GetSalesRepsRequest
     */
    public function setShowActiveOnly($ShowActiveOnly)
    {
      $this->ShowActiveOnly = $ShowActiveOnly;
      return $this;
    }

}
