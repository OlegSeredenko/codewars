<?php
            
function minSum($arr) {
  sort($arr);
  $maxi = array_slice($arr, 0, (count($arr)) / 2);
  sort($maxi);
  $mini = array_slice($arr, (count($arr)) / 2);
  rsort($mini);
  $result = [];
  for($i = 0; $i <count($maxi); $i++){
    $result[] = $maxi[$i] * $mini[$i];
  }
  return(array_sum($result));
}