<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

class Result
{
  /**
   * Data from API
   * @var [type]
   */
  protected $data;

  /**
   * Constructor, sets data (required)
   * @param [type] $data [description]
   */
  public function __construct( $data )
  {
    $this->data = $data;

    $this->init();
  }

  /**
   * Override this function in subclasses to perform data actions
   * @return [type] [description]
   */
  public function init(){}


  /**
   * Simple data accessor in case keys don't exist
   * @param  [type] $name    [description]
   * @param  [type] $default [description]
   * @return [type]          [description]
   */
  public function getData( $name, $default = NULL ) 
  {
    return isset($this->data[$name]) ? $this->data[$name] : $default;
  }


  /**
   * Debug data array
   * @return [type] [description]
   */
  public function pre()
  {
    echo '<pre>' . print_r( $this->data, TRUE ) . '</pre>';
  }
  
}