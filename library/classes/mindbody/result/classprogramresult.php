<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class ClassProgramResult extends Result
{
  
  public function getID()
  {
    return $this->getData('ID');
  }

  public function getName()
  {
    return $this->getData('Name');
  }

  public function getScheduleType()
  {
    return $this->getData('ScheduleType');
  }
}