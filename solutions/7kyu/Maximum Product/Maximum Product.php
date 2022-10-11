<?php

function adjacentElementsProduct($array) {
  $result = $array[0] * $array[1];
  for($i = 1; $i <count($array)-1; $i++ ){
    $x = $array[$i] * $array[$i+1];
    if ($result < $x){
      $result = $x;
    }
  }
  return $result;
}
