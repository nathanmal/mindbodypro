<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class ClassSessionTypeResult extends Result
{
  public function getDefaultDuration()
  {
    return $this->getData('DefaultTimeLength');
  }

  public function getNumDeducted()
  {
    return $this->getData('NumDeducted');
  }

  public function getName()
  {
    return $this->getData('Name');
  }

  public function getID()
  {
    return $this->getData('ID');
  }

}