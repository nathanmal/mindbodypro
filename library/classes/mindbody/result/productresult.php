<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class ProductResult extends Result
{
  
  /**
   * Get product ID
   * @return [type] [description]
   */
  public function getID()
  {
    return $this->getData('ID');
  }

  
  /**
   * Get the product name
   * @return [type] [description]
   */
  public function getName()
  {
    return $this->getData('Name');
  }

  /**
   * Get the product long description
   * @return [type] [description]
   */
  public function getDescription()
  {
    return $this->getData('LongDesc');
  }

  /**
   * Get product tax rate
   * @return [type] [description]
   */
  public function getTaxrate()
  {
    return $this->getData('TaxRate');
  }


  /**
   * Get the product price as sold on location
   * @return [type] [description]
   */
  public function getPrice()
  {
    return $this->getData('Price');
  }

  /**
   * Get the product online price
   * @return [type] [description]
   */
  public function getOnlinePrice()
  {
    return $this->getData('OnlinePrice');
  }


 
}