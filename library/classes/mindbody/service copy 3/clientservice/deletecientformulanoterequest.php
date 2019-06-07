<?php

namespace Mindbody\Service\ClientService;

class DeleteCientFormulaNoteRequest extends MBRequest
{

    /**
     * @var int $FormulaNoteID
     */
    protected $FormulaNoteID = null;

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @param int $FormulaNoteID
     */
    public function __construct($FormulaNoteID)
    {
      parent::__construct();
      $this->FormulaNoteID = $FormulaNoteID;
    }

    /**
     * @return int
     */
    public function getFormulaNoteID()
    {
      return $this->FormulaNoteID;
    }

    /**
     * @param int $FormulaNoteID
     * @return \Mindbody\Service\ClientService\DeleteCientFormulaNoteRequest
     */
    public function setFormulaNoteID($FormulaNoteID)
    {
      $this->FormulaNoteID = $FormulaNoteID;
      return $this;
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
     * @return \Mindbody\Service\ClientService\DeleteCientFormulaNoteRequest
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}
