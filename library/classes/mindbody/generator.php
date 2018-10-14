<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody;

use \Mindbody\API;
use \Mindbody\APIException;

class Generator
{

  /**
   * Output directory
   * @var [type]
   */
  public static $serviceDir = MBPRO_LIB . 'classes/mindbody/service/';


  /**
   * Generate all class files
   * @return [type] [description]
   */
  public static function generate()
  {
    foreach( API::$services as $service )
    {
      self::generateServiceClasses($service);
    }
  }


  /**
   * Generate class files for a service
   * @param  [type] $service [description]
   * @return [type]          [description]
   */
  public static function generateServiceClasses( $service )
  {
    $wdsl = self::wdsl( $service );

    if( empty($wdsl) ) return FALSE;

    $path = self::$serviceDir . $service .'service/';

    echo $path;

    if( ! is_dir($path) ) mkdir($path);
    
    $generator = new \Wsdl2PhpGenerator\Generator();

    $generator->generate(
      new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $wdsl,
        'outputDir' => $path,
        'soapClientOptions' => API::$options,
        'namespaceName' => 'Mindbody\Service\\' . ucfirst($service) .'Service',
        'sharedTypes' => TRUE
      ))
    );
  }

  /**
   * Get WDSL URL for service
   * @param  string $service Service Name
   * @return string          Service URL or empty on failure
   */
  public static function wdsl( $service )
  {
    if( ! in_array($service, API::$services) ) 
    {
      return FALSE;
    }

    return API::$endpoint . ucfirst($service) . 'Service.asmx?WSDL';
  }






}