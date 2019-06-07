<?php

namespace Mindbody\Service\ClientService;

class AddClientFormulaNote
{

    /**
     * @var AddClientFormulaNoteRequest $Request
     */
    protected $Request = null;

    /**
     * @param AddClientFormulaNoteRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return AddClientFormulaNoteRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AddClientFormulaNoteRequest $Request
     * @return \Mindbody\Service\ClientService\AddClientFormulaNote
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
