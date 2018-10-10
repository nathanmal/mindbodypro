<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;
use \Mindbody\Result\ClassProgramResult;
use \Mindbody\Result\ClassSessionTypeResult;

class ClassDescriptionResult extends Result 
{

  public function init()
  {
    $this->program = new ClassProgramResult($this->data['Program']);
    $this->type    = new ClassSessionTypeResult($this->data['SessionType']);
  }

  public function getID()
  {
    return $this->getData('ID');
  }

  public function getName()
  {
    return $this->getData('Name');
  }


  public function getDescription()
  {
    return $this->getData('Description');
  }


  public function getImageURL()
  {
    return $this->getData('ImageURL','');
  }


  public function getProgram()
  {
    return $this->program;
  }


}