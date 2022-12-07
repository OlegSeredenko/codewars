function findIt(array $seq) : int
{   
    $arr = array_count_values($seq);
    foreach($arr as $key => $value){
      if($value % 2 != 0){
        return $key;
      }
    }
}