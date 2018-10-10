<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class StaffResult extends Result
{

  /**
   * Get staff ID
   * @return [type] [description]
   */
  public function getID()
  {
    return $this->getData('ID');
  }

  /**
   * Get staff email
   * @return [type] [description]
   */
  public function getEmail()
  {
    return $this->getData('Email');
  }

  /**
   * Get staff full name
   * @return [type] [description]
   */
  public function getName()
  {
    return $this->getData('Name');
  }

  /**
   * Get staff first name
   * @return [type] [description]
   */
  public function getFirstName()
  {
    return $this->getData('FirstName');
  }

  /**
   * Get staff last name
   * @return [type] [description]
   */
  public function getLastName()
  {
    return $this->getData('LastName');
  }

  /**
   * Get staff image URL
   * @return [type] [description]
   */
  public function getImageURL()
  {
    return $this->getData('ImageURL');
  }

  /**
   * Get staff bio
   * @return [type] [description]
   */
  public function getBio()
  {
    return $this->getData('Bio');
  }

  /**
   * Get staff gender (binary...)
   * @return [type] [description]
   */
  public function getGender()
  {
    return (bool) $this->getData('isMale') ? 'm' : 'f';
  }





}