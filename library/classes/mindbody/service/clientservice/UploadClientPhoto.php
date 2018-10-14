<?php

namespace Mindbody\Service\ClientService;

class UploadClientPhoto
{

    /**
     * @var UploadClientPhotoRequest $Request
     */
    protected $Request = null;

    /**
     * @param UploadClientPhotoRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return UploadClientPhotoRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param UploadClientPhotoRequest $Request
     * @return \Mindbody\Service\ClientService\UploadClientPhoto
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
