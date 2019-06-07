<?php

namespace Mindbody\API;

abstract class MBCollection implements \ArrayAccess, \Iterator, \Countable
{
    protected $_collectionName;

    /**
     * Instantiate Array Collection
     * @param array $collection [description]
     */
    public function __construct( array $collection = array() )
    {
      $this->_collectionName = $this->_getCollectionName();
    }

    /**
     * Get the named object this collection is for
     * @return [type] [description]
     */
    public function _getCollectionName()
    {
      $name = (new \ReflectionObject($object))->getShortName();
      return substr($name, 7);
    }
}
