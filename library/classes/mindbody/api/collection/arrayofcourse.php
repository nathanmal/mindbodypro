<?php

namespace Mindbody\API\Collection;

class ArrayOfCourse extends \Mindbody\API\Common\MBCollection
{

    /**
     * @var Course[] $Course
     */
    protected $Course = null;

    /**
     * @return Course[]
     */
    public function getCourse()
    {
      return $this->Course;
    }

    /**
     * @param Course[] $Course
     * @return \Mindbody\Service\ClassService\ArrayOfCourse
     */
    public function setCourse(array $Course = null)
    {
      $this->Course = $Course;
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
      return isset($this->Course[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Course
     */
    public function offsetGet($offset)
    {
      return $this->Course[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Course $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Course[] = $value;
      } else {
        $this->Course[$offset] = $value;
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
      unset($this->Course[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Course Return the current element
     */
    public function current()
    {
      return current($this->Course);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Course);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Course);
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
      reset($this->Course);
    }

    /**
     * Countable implementation
     *
     * @return Course Return count of elements
     */
    public function count()
    {
      return count($this->Course);
    }

}
