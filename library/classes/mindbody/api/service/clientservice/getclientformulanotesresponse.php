<?php

namespace Mindbody\API\Service\ClientService;

class GetClientFormulaNotesResponse
{

    /**
     * @var GetClientFormulaNotesResult $GetClientFormulaNotesResult
     */
    protected $GetClientFormulaNotesResult = null;

    /**
     * @param GetClientFormulaNotesResult $GetClientFormulaNotesResult
     */
    public function __construct($GetClientFormulaNotesResult)
    {
      $this->GetClientFormulaNotesResult = $GetClientFormulaNotesResult;
    }

    /**
     * @return GetClientFormulaNotesResult
     */
    public function getGetClientFormulaNotesResult()
    {
      return $this->GetClientFormulaNotesResult;
    }

    /**
     * @param GetClientFormulaNotesResult $GetClientFormulaNotesResult
     * @return \Mindbody\Service\ClientService\GetClientFormulaNotesResponse
     */
    public function setGetClientFormulaNotesResult($GetClientFormulaNotesResult)
    {
      $this->GetClientFormulaNotesResult = $GetClientFormulaNotesResult;
      return $this;
    }

}
