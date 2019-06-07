<?php

namespace Mindbody\Service\SaleService;

class AutopaySchedule
{

    /**
     * @var string $FrequencyType
     */
    protected $FrequencyType = null;

    /**
     * @var int $FrequencyValue
     */
    protected $FrequencyValue = null;

    /**
     * @var string $FrequencyTimeUnit
     */
    protected $FrequencyTimeUnit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFrequencyType()
    {
      return $this->FrequencyType;
    }

    /**
     * @param string $FrequencyType
     * @return \Mindbody\Service\SaleService\AutopaySchedule
     */
    public function setFrequencyType($FrequencyType)
    {
      $this->FrequencyType = $FrequencyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyValue()
    {
      return $this->FrequencyValue;
    }

    /**
     * @param int $FrequencyValue
     * @return \Mindbody\Service\SaleService\AutopaySchedule
     */
    public function setFrequencyValue($FrequencyValue)
    {
      $this->FrequencyValue = $FrequencyValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequencyTimeUnit()
    {
      return $this->FrequencyTimeUnit;
    }

    /**
     * @param string $FrequencyTimeUnit
     * @return \Mindbody\Service\SaleService\AutopaySchedule
     */
    public function setFrequencyTimeUnit($FrequencyTimeUnit)
    {
      $this->FrequencyTimeUnit = $FrequencyTimeUnit;
      return $this;
    }

}
