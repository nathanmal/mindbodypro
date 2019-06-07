<?php

namespace Mindbody;

/**
 * Service result class
 *
 * Adds an abstraction layer over the Result objects from service calls, to make 
 * formatting / accessing data just a bit easier
 * 
 */
class Result
{
  /**
   * Result object
   * @var object
   */
  protected $result;


  /**
   * Class type of result object
   * @var [type]
   */
  protected $resultType;

  /**
   * Method name
   * @var string
   */
  protected $method;

  /**
   * Response object
   * @var  \Mindbody\Service\<ServiceType>\MBResponse
   */
  protected $response;

  /**
   * Status 
   * @var string
   */
  protected $status;

  /**
   * Response code
   * @var int
   */
  protected $code;

  /**
   * Response message
   * @var string
   */
  protected $message;

  /**
   * Result count
   * @var int
   */
  protected $count;

  /**
   * Result detail
   * @var string Bare|Basic|Full
   */
  protected $detail;

  /**
   * Current page index
   * @var int
   */
  protected $currentPage;

  /**
   * Total pages in response
   * @var int
   */
  protected $totalPages;

  /**
   * Array of parameters to sort results by
   * @var array
   */
  protected $sort;


  /**
   * Constructor function
   * @param [type] $method   [description]
   * @param [type] $response [description]
   */
  public function __construct( $method, $response )
  {
    $this->_setResult( $method, $response );

    return $this;
  }

  /**
   * Result accessor
   * @return [type] [description]
   */
  public function getResult()
  {
    return $this->result;
  }

  /**
   * Get the response object
   * @return [type] [description]
   */
  public function getResponse()
  {
    return $this->response;
  }

  /**
   * Get the method name
   * @return [type] [description]
   */
  public function getMethod()
  {
    return $this->method;
  }

  /**
   * Get the last request status string
   * @return [type] [description]
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Get the last request code
   * @return [type] [description]
   */
  public function getCode()
  {
    return $this->code;
  }

  /**
   * Get the result count from the last request
   * @return [type] [description]
   */
  public function getResultCount()
  {
    return $this->count;
  }

  /**
   * Get the level of detail sent by the last request
   * @return [type] [description]
   */
  public function getDetail()
  {
    return $this->detail;
  }

  /**
   * Get the page index sent by the last request
   * @return [type] [description]
   */
  public function getCurrentPageIndex()
  {
    return $this->currentPage;
  }

  /**
   * Get the total page count of all results from last request
   * @return [type] [description]
   */
  public function getTotalPageCount()
  {
    return $this->totalPages;
  }

  /**
   * Accessor for result data using dot syntax
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public function getProperty( $path )
  {
    $props = explode('.', $path);

    $result = $this->getResult();

    foreach( $props as $prop )
    {
      $prop = ucfirst($prop);

      $accessor = 'get' . $prop;

      if( method_exists( $result, $accessor ) )
      {
        $result = $result->{$accessor}();
      }
    }

    return $result;
  }

  /**
   * Sort the result array
   * @param  [type] $property  [description]
   * @param  string $direction [description]
   * @return [type]            [description]
   */
  public function sortBy( $property, $direction = 'ASC' )
  {
    if( is_array($property) )
    {
      $this->sort[] = $property;
    }
    else
    {
      $this->sort[] = array( $property, $direction );
    }

    // Only returns a type if the result is an array
    $type = $this->getArrayClassType();

    if( $type ) 
    {
      $getter = 'get' . $type;
      $setter = 'set' . $type;

      $array = $this->result->{$getter}();
      //echo '<pre>' . print_r($array, TRUE) . '</pre>';
      usort($array, array($this, '_doSort') );
      //echo '<pre>' . print_r($array, TRUE) . '</pre>';
      $this->result->{$setter}($array);
    }
  }

  /**
   * If result is an array of items, returns the string class name of items
   * @return [type] [description]
   */
  public function getArrayClassType()
  {
    if( $this->resultType && strpos($this->resultType, 'ArrayOf') === 0 )
    {
      return substr($this->resultType, 7);
    }

    return NULL;
  }

  /**
   * Sort function for usort()
   * @param  [type] $a [description]
   * @param  [type] $b [description]
   * @return [type]    [description]
   */
  protected function _doSort( $a, $b )
  {
    foreach( $this->sort as $sort )
    {
      $prop = $sort[0];
      $dir  = $sort[1];

      $propMethod = 'get' . ucfirst($prop);

      if( method_exists($a, $propMethod) && method_exists($b, $propMethod) )
      { 
        $a1 = $a->{$propMethod}();
        $b1 = $b->{$propMethod}();

        // Equal
        if( $a1 == $b1 ) 
        return 0;

        // Ascending
        if( $dir == 'ASC' )
        return $a1 < $b1 ? -1 : 1;
        
        // Descending
        return $a1 > $b1 ? -1 : 1;
      }

      return 0;
    }
  }

  /**
   * Parse the response object and set basic properties
   * @param [type] $method   [description]
   * @param [type] $response [description]
   */
  private function _setResult( $method, $response )
  {   
    // Set the method
    $this->method   = $method;

    // Set the response
    $this->response = $response;

    // Should be universal to response objects
    $resultMethod = 'get' . ucfirst($method) . 'Result';

    // By default a copy of response
    $result = $response;

    // Set the common response params
    if( method_exists($this->response, $resultMethod) )
    {
      $result = $this->response->{$resultMethod}();

      $this->status      = $result->getStatus();
      $this->code        = $result->getErrorCode();
      $this->message     = $result->getMessage();
      $this->detail      = $result->getXMLDetail();
      $this->count       = $result->getResultCount();
      $this->currentPage = $result->getCurrentPageIndex();
      $this->totalPages  = $result->getTotalPageCount();
    }

    // If the result is an array of items, extract it to the result
    $arrayMethod = lcfirst($method);

    if( method_exists($result, $arrayMethod) )
    {
      $result = $result->{$arrayMethod}();
    }

    // Set the result type
    $this->resultType = (new \ReflectionClass($result))->getShortName();

    // Set the result
    $this->result = $result;

  }


  
}