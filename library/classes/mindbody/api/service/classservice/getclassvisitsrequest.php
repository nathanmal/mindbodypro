<?php

namespace Mindbody\API\Service\ClassService;

class GetClassVisitsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var int $ClassID
     */
    protected $ClassID = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @param int $ClassID
     */
    public function __construct($ClassID)
    {
      parent::__construct();
      $this->ClassID = $ClassID;
    }

    /**
     * @return int
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param int $ClassID
     * @return \Mindbody\Service\ClassService\GetClassVisitsRequest
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return \Mindbody\Service\ClassService\GetClassVisitsRequest
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
