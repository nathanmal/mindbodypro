<?php

namespace Mindbody\API\Struct;

class RecordSet
{

    /**
     * @var Row[] $Row
     */
    protected $Row = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Row[]
     */
    public function getRow()
    {
      return $this->Row;
    }

    /**
     * @param Row[] $Row
     * @return \Mindbody\Service\SiteService\RecordSet
     */
    public function setRow(array $Row = null)
    {
      $this->Row = $Row;
      return $this;
    }

}
