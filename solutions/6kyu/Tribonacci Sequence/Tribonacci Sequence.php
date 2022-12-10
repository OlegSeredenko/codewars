function tribonacci($signature, $n) {
  if($n == 0){
    return [];
  }elseif($n == 1) {
    return [($signature[0])];
  }elseif($n == 2){
    return (array_splice($signature,0,2));
  }elseif($n == 3){
    return ($signature);
  }
  $new_arr = $signature;
  for($i = 0; $i < ($n-3); $i++){
      $new_arr[] = ($new_arr[$i] + $new_arr[$i+1] + $new_arr[$i+2]);
    }
  return $new_arr;
}