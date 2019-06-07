<?php

namespace Mindbody\API\Struct;

class PaymentInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Mindbody\Service\SaleService\PaymentInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
