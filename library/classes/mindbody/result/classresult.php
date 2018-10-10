<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;
use \Mindbody\Result\LocationResult;
use \Mindbody\Result\ClassDescriptionResult;
use \Mindbody\Result\StaffResult;

class ClassResult extends Result
{

  public $location;
  public $description;
  public $staff;

  public $starttime;
  public $endtime;
  
  public function init()
  {
    $this->location    = new LocationResult($this->data['Location']);
    $this->description = new ClassDescriptionResult($this->data['ClassDescription']);
    $this->staff       = new StaffResult($this->data['Staff']);

    $this->starttime   = strtotime($this->data['StartDateTime']);
    $this->endtime     = strtotime($this->data['EndDateTime']);
  }

  /**
   * Get class ID
   * @return [type] [description]
   */
  public function getID()
  {
    return $this->data['ID'];
  }

  /**
   * Get the class's name
   * @return [type] [description]
   */
  public function getName()
  {
    return $this->description->getName();
  }

  /**
   * Get session type
   * @return [type] [description]
   */
  public function getType()
  {
    return $this->description->type->getName();
  }

  /**
   * Get location
   * @return [type] [description]
   */
  public function getLocation()
  {
    return $this->location;
  }

  /**
   * Get the class's description
   * @return [type] [description]
   */
  public function getDescription()
  {
    return $this->description->getDescription();
  }

  /**
   * Get class image URL
   * @return [type] [description]
   */
  public function getImageURL()
  {
    return $this->description->getImageURL();
  }


  /**
   * Get staff object
   * @return [type] [description]
   */
  public function getStaff()
  {
    return $this->staff;
  }


  /**
   * Get start time in either unix or format specified
   * @param  [type] $format [description]
   * @return [type]         [description]
   */
  public function getStartTime( $format = NULL )
  {
    return is_null($format) ? $this->starttime : date( $format, $this->starttime );
  }

  /**
   * Get the end time in either unix or format specified
   * @param  [type] $format [description]
   * @return [type]         [description]
   */
  public function getEndTime( $format = NULL )
  {
    return is_null($format) ? $this->endtime : date( $format, $this->endtime );
  }
  
  /**
   * Get duration (in seconds)
   * @return [type] [description]
   */
  public function getDuration()
  {
    return ($this->endtime - $this->starttime);
  }

  /**
   * Get duration as a "x hr, y min" string
   * @return [type] [description]
   */
  public function getDurationStr()
  {
    $duration = $this->getDuration();
    $hr       = floor($duration/3600);
    $min      = ($duration % 3600)/60;

    $str  = ( $hr > 0 ? $hr .' hr' : '');
    $str .= $min > 0 && $hr ? ' ' . $min .' min' : ($min ? $min . ' min' : '');

    return $str;
  }

  /**
   * Test if this class is a workshop
   * @return boolean [description]
   */
  public function isWorkshop()
  {
    return (bool) ($this->getType() == 'workshops' 
      OR $this->description->program->getScheduleType() == 'Enrollment');
  }

  /**
   * Test if class is canceled
   * @return boolean [description]
   */
  public function isCanceled()
  {
    return (bool) $this->data['IsCanceled'];
  }

  

  public function isActive()
  {
    return (bool) $this->data['Active'];
  }

  public function getCapacity()
  {
    return (int) $this->data['MaxCapacity'];
  }

  public function isAvailable()
  {
    return (bool) $this->data['IsAvailable'];
  }
}