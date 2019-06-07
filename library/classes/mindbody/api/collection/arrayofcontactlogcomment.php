<?php

namespace Mindbody\API\Collection;

class ArrayOfContactLogComment extends \Mindbody\API\Common\MBCollection
{

    /**
     * @var ContactLogComment[] $ContactLogComment
     */
    protected $ContactLogComment = null;

    /**
     * @return ContactLogComment[]
     */
    public function getContactLogComment()
    {
      return $this->ContactLogComment;
    }

    /**
     * @param ContactLogComment[] $ContactLogComment
     * @return \Mindbody\Service\ClientService\ArrayOfContactLogComment
     */
    public function setContactLogComment(array $ContactLogComment = null)
    {
      $this->ContactLogComment = $ContactLogComment;
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
      return isset($this->ContactLogComment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactLogComment
     */
    public function offsetGet($offset)
    {
      return $this->ContactLogComment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactLogComment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactLogComment[] = $value;
      } else {
        $this->ContactLogComment[$offset] = $value;
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
      unset($this->ContactLogComment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactLogComment Return the current element
     */
    public function current()
    {
      return current($this->ContactLogComment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactLogComment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactLogComment);
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
      reset($this->ContactLogComment);
    }

    /**
     * Countable implementation
     *
     * @return ContactLogComment Return count of elements
     */
    public function count()
    {
      return count($this->ContactLogComment);
    }

}
