<?php
function moveZeros(array $items): array
{   
    $first_arr = [];
    $second_arr = [];
    for($i = 0; $i < count($items); $i++){
      if(($items[$i] === 0) || ($items[$i] === 0.0)){
        $second_arr[] = 0;
      }else{
        $first_arr[] = $items[$i];
      }
    }
  return array_merge($first_arr, $second_arr);
}
?>