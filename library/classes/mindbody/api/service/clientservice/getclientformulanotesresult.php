<?php

namespace Mindbody\API\Service\ClientService;

class GetClientFormulaNotesResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfFormulaNote $FormulaNotes
     */
    protected $FormulaNotes = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfFormulaNote
     */
    public function getFormulaNotes()
    {
      return $this->FormulaNotes;
    }

    /**
     * @param ArrayOfFormulaNote $FormulaNotes
     * @return \Mindbody\Service\ClientService\GetClientFormulaNotesResult
     */
    public function setFormulaNotes($FormulaNotes)
    {
      $this->FormulaNotes = $FormulaNotes;
      return $this;
    }

}
