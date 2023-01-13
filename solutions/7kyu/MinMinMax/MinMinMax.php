<?php
function minMinMax($array) {
  $mini = min($array);
  $maxi = max($array);
  for ($i = 1; $i < count($array); $i++) {
    $result = array_search(($mini + $i), $array);
    if ($result === false) {
      $average = ($mini + $i);
      break;
    }
  }
  return [$mini, $average, $maxi];
}
