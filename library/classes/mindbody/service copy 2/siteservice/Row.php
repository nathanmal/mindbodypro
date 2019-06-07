<?php

namespace Mindbody\Service\SiteService;

class Row
{

    /**
     * @var anyType $Content
     */
    protected $Content = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param anyType $Content
     * @return \Mindbody\Service\SiteService\Row
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
