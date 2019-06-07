<?php

namespace Mindbody\API\Service\ClientService;

class UploadClientPhotoResponse
{

    /**
     * @var UploadClientPhotoResult $UploadClientPhotoResult
     */
    protected $UploadClientPhotoResult = null;

    /**
     * @param UploadClientPhotoResult $UploadClientPhotoResult
     */
    public function __construct($UploadClientPhotoResult)
    {
      $this->UploadClientPhotoResult = $UploadClientPhotoResult;
    }

    /**
     * @return UploadClientPhotoResult
     */
    public function getUploadClientPhotoResult()
    {
      return $this->UploadClientPhotoResult;
    }

    /**
     * @param UploadClientPhotoResult $UploadClientPhotoResult
     * @return \Mindbody\Service\ClientService\UploadClientPhotoResponse
     */
    public function setUploadClientPhotoResult($UploadClientPhotoResult)
    {
      $this->UploadClientPhotoResult = $UploadClientPhotoResult;
      return $this;
    }

}
