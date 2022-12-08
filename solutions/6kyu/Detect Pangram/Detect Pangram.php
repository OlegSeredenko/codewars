function detect_pangram($string) { 
  $string = str_split(strtolower($string));
  $arr = range('a','z');
  $count = 0;
  for($i = 0; $i < count($arr); $i++){
      if(in_array($arr[$i], $string)){
        $count = $count + 1;
      }
    }
  return ($count >= count($arr)) ? true : false;
  }