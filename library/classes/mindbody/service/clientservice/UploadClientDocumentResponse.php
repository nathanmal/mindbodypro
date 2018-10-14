<?php

namespace Mindbody\Service\ClientService;

class UploadClientDocumentResponse
{

    /**
     * @var UploadClientDocumentResult $UploadClientDocumentResult
     */
    protected $UploadClientDocumentResult = null;

    /**
     * @param UploadClientDocumentResult $UploadClientDocumentResult
     */
    public function __construct($UploadClientDocumentResult)
    {
      $this->UploadClientDocumentResult = $UploadClientDocumentResult;
    }

    /**
     * @return UploadClientDocumentResult
     */
    public function getUploadClientDocumentResult()
    {
      return $this->UploadClientDocumentResult;
    }

    /**
     * @param UploadClientDocumentResult $UploadClientDocumentResult
     * @return \Mindbody\Service\ClientService\UploadClientDocumentResponse
     */
    public function setUploadClientDocumentResult($UploadClientDocumentResult)
    {
      $this->UploadClientDocumentResult = $UploadClientDocumentResult;
      return $this;
    }

}
