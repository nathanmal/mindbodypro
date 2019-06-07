<?php 

/**
 * Access array elements easily, with default
 */
if( ! function_exists('element') )
{
  function element( &$array, $key, $default = NULL )
  {
    return ( is_array($array) && isset($array[$key]) ) ? $array[$key] : $default;
  }
}

/**
 * Print out a variable
 */
if( ! function_exists('pre') )
{
  function pre( $var, $return = FALSE )
  { 
    ob_start();
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    $out = ob_get_clean();
    if( $return ) return $out;
    echo $out;
  }
}

/**
 * Get the current URL
 */
if( ! function_exists('current_url') )
{
  function current_url()
  {
    global $wp;
    return home_url($wp->request);
  }
}

/**
 * Display a list of enqueued scripts
 */
if( ! function_exists('display_enqueue_scripts') )
{
  function display_enqueue_scripts() 
  {
      global $wp_scripts;
      pre($wp_scripts->queue);
  }
}


if( ! function_exists('mb_classes_sort_by_date') )
{
  function mb_classes_sort_by_date( $a, $b )
  {
    $ad = $a->getStartDateTime();
    $bd = $b->getStartDateTime();

    return $ad == $bd ? 0 : ( $ad < $bd ? -1 : 1 );
  }
}




if( ! function_exists('mb_class_duration') )
{
  function mb_class_duration( $class )
  {
    $start = $class->getStartDateTime();
    $end   = $class->getEndDateTime();
    $stime = $start->getTimestamp();
    $etime = $end->getTimestamp();
    $time  = $etime - $stime;

    $hours = floor($time/3600);
    $minutes = ($time % 3600)/60;

    $duration = '';

    if( $hours >= 1 ) {
      $duration .= $hours . ' Hr ';
    }

    if( $minutes > 0 ) {
      $duration .= $minutes . ' Min';
    }

    return trim($duration);
  }
}

if( ! function_exists('do_redirect') )
{
  function do_redirect( $url, $status = 302 )
  { 
    // If headers have been sent, use Javascript
    if( headers_sent() ) 
    {
      $url = site_url($url);
      echo '<script type="text/javascript">window.location="'.$url.'";</script>';
    }
    else
    {
      wp_redirect($url, $status);
    }
  }
}



if( ! function_exists('get_class_name') )
{
  function get_class_name( $object )
  {
    return (new \ReflectionObject($object))->getShortName();
  }
}
