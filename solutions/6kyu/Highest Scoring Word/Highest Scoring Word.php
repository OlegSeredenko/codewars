function high($x) {
  $x = explode(' ',$x);
  $arr_alpha = range('a','z');
  $result_count = 0;
  $result_string = '';
  for($i = 0; $i < count($x); $i++){
    $str = str_split($x[$i]);
    $count = 0;
    for($y = 0; $y < count($str); $y++){
      $key = array_search($str[$y], $arr_alpha) + 1; 
      $count = $count + $key;
    }
    if($count > $result_count){
      $result_count = $count;
       $result_string = $x[$i];
    }
  }
  
  return $result_string;
}