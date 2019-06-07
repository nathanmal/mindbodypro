<?php

namespace Mindbody\API\Credentials;

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

    /**
     * Constructor
     * @param array $credentials [description]
     */
    public function __construct( $credentials = array() )
    {
        if( isset($credentials['SourceName']) )
        {
            $this->setSourceName[$credentials['SourceName']];
        }

        if( isset($credentials['Password']) )
        {
            $this->setPassword($credentials['Password']);
        }

        if( isset($credentials['SiteIDs']) )
        {   
            $ids = $credentials['SiteIDs'];

            $ids = is_array($ids) ? $ids : array($ids);

            $this->setSiteIDs( $ids );
        }
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
