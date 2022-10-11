<?php

function bump($x) {
  $count = 0;
  for($i = 0; $i < strlen($x); $i++){
    if($x[$i] == 'n'){
      $count+= 1;
    }
  }
  if($count <= 15){
    return "Woohoo!";
  }else{
    return "Car Dead";
  }
}
