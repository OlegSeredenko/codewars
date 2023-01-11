<?php
function replaceAll($string) {
  $x = strpos($string, '#');
  if ($x == false) {
    return $string;
  }
  $string = mb_strcut($string, 0, $x);
  return $string;
}
