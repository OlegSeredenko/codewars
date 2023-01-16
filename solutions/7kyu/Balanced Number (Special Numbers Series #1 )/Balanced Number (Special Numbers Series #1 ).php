<?php
function balancedNum($num) {
  $num = str_split((string)$num);
  if (count($num) <= 2) {
    return "Balanced";
  }
  $x = (((count($num) % 2) == 0) ? ((count($num) / 2) - 1) : (floor(count($num) / 2)));
  $first_sum = array_sum(array_slice($num, 0, $x));
  $second_sum = (((count($num) % 2) == 0)) ? (array_sum(array_slice($num, ($x+2), $x))) : (array_sum(array_slice($num, ($x+1), $x)));
  return ($first_sum == $second_sum) ? "Balanced" : "Not Balanced";
}
