<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class ServiceResult extends Result
{
  
  /**
   * Get service ID
   * @return [type] [description]
   */
  public function getID()
  {
    return $this->getData('ID');
  }

  /**
   * Get service product ID
   * @return [type] [description]
   */
  public function getProductID()
  {
    return $this->getData('ProductID');
  }

  /**
   * Get the service name
   * @return [type] [description]
   */
  public function getName()
  {
    return $this->getData('Name');
  }

  /**
   * Get service tax rate
   * @return [type] [description]
   */
  public function getTaxrate()
  {
    return $this->getData('TaxRate');
  }

  /**
   * Get count of available uses for this service
   * @return [type] [description]
   */
  public function getCount()
  {
    return $this->getData('Count');
  }

  /**
   * Get the service price as sold on location
   * @return [type] [description]
   */
  public function getPrice()
  {
    return $this->getData('Price');
  }

  /**
   * Get the service online price
   * @return [type] [description]
   */
  public function getOnlinePrice()
  {
    return $this->getData('OnlinePrice');
  }

  /**
   * Get the service program ID
   * @return [type] [description]
   */
  public function getProgramID()
  {
    return $this->getData('ProgramID');
  }

 
}