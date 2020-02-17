<?php
 
  $var1 = 1;
  $var2 = "1";

  if($var1 === $var2){
    echo "same value";
  }else{
    echo "not same";
  }

  switch($var1){
    case 1:
      echo "yeah it is one";
      break;
    case 2:
      echo "no its not one";
      break;
    default:echo "nothing";
  }

  $room = array(
    'name' => 'sa bal',
    'status' => 'unavailable',
    'price' => 10000
  );

  echo ($room['status']=="available")? "it is available":"its unavailable";

?>