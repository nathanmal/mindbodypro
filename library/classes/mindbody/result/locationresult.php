<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class LocationResult extends Result
{

  /**
   * Get location Site ID
   * @return [type] [description]
   */
  public function getSiteID()
  { 
    return $this->getData('SiteID');
  }

  /**
   * Get location name
   * @return [type] [description]
   */
  public function getName()
  {
    return $this->getData('Name');
  }

  /**
   * Get full address
   * @return [type] [description]
   */
  public function getAddress()
  {
    return $this->getData('Address'). ' ' . $this->getData('Address2');
  }

  /**
   * Get location phone number
   * @return [type] [description]
   */
  public function getPhone()
  {
    return $this->getData('Phone');
  }

  /**
   * Get location latitude
   * @return [type] [description]
   */
  public function getLatitude()
  {
    return $this->getData('Latitude');
  }

  /**
   * Get location longitude
   * @return [type] [description]
   */
  public function getLongitude()
  {
    return $this->getData('Longitude');
  }

  /**
   * Get location lat/long coordinates
   * @return [type] [description]
   */
  public function getLatLong()
  {
    return array( $this->getData('Latitude'), $this->getData('Longitude') );
  }

  /**
   * If location has classes
   * @return boolean [description]
   */
  public function hasClasses()
  {
    return (bool) $this->getData('HasClasses');
  }




}