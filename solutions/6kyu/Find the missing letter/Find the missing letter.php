function find_missing_letter(array $array): string {
  $arr_low_lettrs = range('a','z');
  
  $arr_up_lettrs = range('A','Z');
  
  $count_array = count($array)+1;
  
  $s = implode($array);
  
  if(ctype_upper($s)){
    $key = array_search($array[0], $arr_up_lettrs);
    $result = array_slice($arr_up_lettrs, $key, $count_array);
  }else{
    $key = array_search($array[0], $arr_low_lettrs);
    $result = array_slice($arr_low_lettrs, $key, $count_array);
  }
  for($i = 0; $i < count($array); $i++){
      
      if ((in_array($result[$i], $array)) != true){
          return ((string)$result[$i]);
      }
  }
}
