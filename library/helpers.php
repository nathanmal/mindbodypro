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