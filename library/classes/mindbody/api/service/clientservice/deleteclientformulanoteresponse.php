<?php

namespace Mindbody\API\Service\ClientService;

class DeleteClientFormulaNoteResponse
{

    /**
     * @var DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     */
    protected $DeleteClientFormulaNoteResult = null;

    /**
     * @param DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     */
    public function __construct($DeleteClientFormulaNoteResult)
    {
      $this->DeleteClientFormulaNoteResult = $DeleteClientFormulaNoteResult;
    }

    /**
     * @return DeleteClientFormulaNoteResult
     */
    public function getDeleteClientFormulaNoteResult()
    {
      return $this->DeleteClientFormulaNoteResult;
    }

    /**
     * @param DeleteClientFormulaNoteResult $DeleteClientFormulaNoteResult
     * @return \Mindbody\Service\ClientService\DeleteClientFormulaNoteResponse
     */
    public function setDeleteClientFormulaNoteResult($DeleteClientFormulaNoteResult)
    {
      $this->DeleteClientFormulaNoteResult = $DeleteClientFormulaNoteResult;
      return $this;
    }

}
