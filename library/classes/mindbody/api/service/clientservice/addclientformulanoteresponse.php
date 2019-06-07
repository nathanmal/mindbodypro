<?php

namespace Mindbody\API\Service\ClientService;

class AddClientFormulaNoteResponse
{

    /**
     * @var AddClientFormulaNoteResult $AddClientFormulaNoteResult
     */
    protected $AddClientFormulaNoteResult = null;

    /**
     * @param AddClientFormulaNoteResult $AddClientFormulaNoteResult
     */
    public function __construct($AddClientFormulaNoteResult)
    {
      $this->AddClientFormulaNoteResult = $AddClientFormulaNoteResult;
    }

    /**
     * @return AddClientFormulaNoteResult
     */
    public function getAddClientFormulaNoteResult()
    {
      return $this->AddClientFormulaNoteResult;
    }

    /**
     * @param AddClientFormulaNoteResult $AddClientFormulaNoteResult
     * @return \Mindbody\Service\ClientService\AddClientFormulaNoteResponse
     */
    public function setAddClientFormulaNoteResult($AddClientFormulaNoteResult)
    {
      $this->AddClientFormulaNoteResult = $AddClientFormulaNoteResult;
      return $this;
    }

}
