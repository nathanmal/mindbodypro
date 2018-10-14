<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Result;

use \Mindbody\Result;

class ClassServiceResult extends Result
{

  

  public function GetClasses( GetClassesResponse $response )
  {
    return $reponse->getGetClassesResult()->getClasses();
  }

}