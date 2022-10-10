<?php
            
function solve($arr) {
  $new_arr = [];
  $alpha = range('a','z');
  for($i = 0; $i < count($arr); $i++){
    $s = strtolower($arr[$i]);
    $count = 0;
    for($z = 0; $z < strlen($s); $z++){
      if($s[$z] == $alpha[$z]){
        $count += 1;
      }
    }
     $new_arr[] =  $count;
  }
  return $new_arr;
}