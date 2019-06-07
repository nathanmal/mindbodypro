<?php

namespace Mindbody\Service\ClientService;

class ArrayOfClientRelationship implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientRelationship[] $ClientRelationship
     */
    protected $ClientRelationship = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientRelationship[]
     */
    public function getClientRelationship()
    {
      return $this->ClientRelationship;
    }

    /**
     * @param ClientRelationship[] $ClientRelationship
     * @return \Mindbody\Service\ClientService\ArrayOfClientRelationship
     */
    public function setClientRelationship(array $ClientRelationship = null)
    {
      $this->ClientRelationship = $ClientRelationship;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ClientRelationship[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientRelationship
     */
    public function offsetGet($offset)
    {
      return $this->ClientRelationship[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientRelationship $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientRelationship[] = $value;
      } else {
        $this->ClientRelationship[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ClientRelationship[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientRelationship Return the current element
     */
    public function current()
    {
      return current($this->ClientRelationship);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientRelationship);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientRelationship);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ClientRelationship);
    }

    /**
     * Countable implementation
     *
     * @return ClientRelationship Return count of elements
     */
    public function count()
    {
      return count($this->ClientRelationship);
    }

}
