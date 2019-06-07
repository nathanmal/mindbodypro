<?php

namespace Mindbody\API\Service\ClientService;

class GetClientsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfString $ClientIDs
     */
    protected $ClientIDs = null;

    /**
     * @var string $SearchText
     */
    protected $SearchText = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfString
     */
    public function getClientIDs()
    {
      return $this->ClientIDs;
    }

    /**
     * @param ArrayOfString $ClientIDs
     * @return \Mindbody\Service\ClientService\GetClientsRequest
     */
    public function setClientIDs($ClientIDs)
    {
      $this->ClientIDs = $ClientIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return \Mindbody\Service\ClientService\GetClientsRequest
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect()
    {
      return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     * @return \Mindbody\Service\ClientService\GetClientsRequest
     */
    public function setIsProspect($IsProspect)
    {
      $this->IsProspect = $IsProspect;
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
     * @return \Mindbody\Service\ClientService\GetClientsRequest
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
