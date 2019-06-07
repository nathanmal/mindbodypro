<?php

namespace Mindbody\API\Service\ClientService;

class UploadClientDocumentRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var base64Binary $Bytes
     */
    protected $Bytes = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Mindbody\Service\ClientService\UploadClientDocumentRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Mindbody\Service\ClientService\UploadClientDocumentRequest
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBytes()
    {
      return $this->Bytes;
    }

    /**
     * @param base64Binary $Bytes
     * @return \Mindbody\Service\ClientService\UploadClientDocumentRequest
     */
    public function setBytes($Bytes)
    {
      $this->Bytes = $Bytes;
      return $this;
    }

}
