function tower_builder(int $n): array {
  $p = ' ';
  var_dump(str_repeat($p , 2));
  $z = '*';
  $new_arr = [];
  $bottom = 1;
  for($i = 1; $i < $n; $i++){
    $bottom = $bottom + 2;
  }
  $count = 1;
  for($y = 0; $y < $n; $y++){
    $s = str_repeat($p, (($bottom-1)/2)).str_repeat($z, $count).str_repeat($p, (($bottom-1)/2));
    
    $new_arr[] = $s;
    $count = $count + 2;
    $bottom = $bottom - 2;
  }
  return($new_arr);
}