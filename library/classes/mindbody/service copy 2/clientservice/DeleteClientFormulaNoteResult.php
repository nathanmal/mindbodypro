<?php

namespace Mindbody\Service\ClientService;

class DeleteClientFormulaNoteResult extends MBResult
{

    /**
     * @var FormulaNote $FormulaNote
     */
    protected $FormulaNote = null;

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
     * @return FormulaNote
     */
    public function getFormulaNote()
    {
      return $this->FormulaNote;
    }

    /**
     * @param FormulaNote $FormulaNote
     * @return \Mindbody\Service\ClientService\DeleteClientFormulaNoteResult
     */
    public function setFormulaNote($FormulaNote)
    {
      $this->FormulaNote = $FormulaNote;
      return $this;
    }

}
