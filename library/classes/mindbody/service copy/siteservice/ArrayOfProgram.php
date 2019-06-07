<?php

namespace Mindbody\Service\SiteService;

class ArrayOfProgram implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Program[] $Program
     */
    protected $Program = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Program[]
     */
    public function getProgram()
    {
      return $this->Program;
    }

    /**
     * @param Program[] $Program
     * @return \Mindbody\Service\SiteService\ArrayOfProgram
     */
    public function setProgram(array $Program = null)
    {
      $this->Program = $Program;
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
      return isset($this->Program[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Program
     */
    public function offsetGet($offset)
    {
      return $this->Program[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Program $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Program[] = $value;
      } else {
        $this->Program[$offset] = $value;
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
      unset($this->Program[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Program Return the current element
     */
    public function current()
    {
      return current($this->Program);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Program);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Program);
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
      reset($this->Program);
    }

    /**
     * Countable implementation
     *
     * @return Program Return count of elements
     */
    public function count()
    {
      return count($this->Program);
    }

}
