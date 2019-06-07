<?php

namespace Mindbody\Service\ClientService;

class UpcomingAutopayEvent
{

    /**
     * @var \DateTime $ScheduleDate
     */
    protected $ScheduleDate = null;

    /**
     * @var float $ChargeAmount
     */
    protected $ChargeAmount = null;

    /**
     * @var EPaymentMethod $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @param EPaymentMethod $PaymentMethod
     */
    public function __construct($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleDate()
    {
      if ($this->ScheduleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduleDate
     * @return \Mindbody\Service\ClientService\UpcomingAutopayEvent
     */
    public function setScheduleDate(\DateTime $ScheduleDate = null)
    {
      if ($ScheduleDate == null) {
       $this->ScheduleDate = null;
      } else {
        $this->ScheduleDate = $ScheduleDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param float $ChargeAmount
     * @return \Mindbody\Service\ClientService\UpcomingAutopayEvent
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
      return $this;
    }

    /**
     * @return EPaymentMethod
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param EPaymentMethod $PaymentMethod
     * @return \Mindbody\Service\ClientService\UpcomingAutopayEvent
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

}
