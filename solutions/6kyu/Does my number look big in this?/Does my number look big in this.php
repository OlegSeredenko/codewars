function narcissistic(int $value): bool {
  $l = strlen((string)$value);
  $s = (string)$value;
  $sum = 0;
  for($i = 0; $i < $l; $i++){
    $sum = $sum + ((int)$s[$i])**$l;
  }
  return ($sum == $value) ? true : false;
}