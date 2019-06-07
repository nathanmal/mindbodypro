<?php

namespace Mindbody\Service\AppointmentService;

class SourceCredentials
{

    /**
     * @var string $SourceName
     */
    protected $SourceName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfInt $SiteIDs
     */
    protected $SiteIDs = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
      return $this->SourceName;
    }

    /**
     * @param string $SourceName
     * @return \Mindbody\Service\AppointmentService\SourceCredentials
     */
    public function setSourceName($SourceName)
    {
      $this->SourceName = $SourceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Mindbody\Service\AppointmentService\SourceCredentials
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSiteIDs()
    {
      return $this->SiteIDs;
    }

    /**
     * @param ArrayOfInt $SiteIDs
     * @return \Mindbody\Service\AppointmentService\SourceCredentials
     */
    public function setSiteIDs($SiteIDs)
    {
      $this->SiteIDs = $SiteIDs;
      return $this;
    }

}
