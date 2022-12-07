function persistence(int $num): int {
  $count = 0;
  while($num > 9){
    $count = $count + 1;
    $s = str_split((string)$num);
    $result = 1;
    for($i = 0; $i < count($s); $i++){
      $result = $result * ((int)$s[$i]);
    }
    $num = (int)$result;
  }
  return $count;
}