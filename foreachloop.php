<?php
 
  $array = array(
    'name' => 'John Doe',
    'age' => 30,
    'job' => 'student'
  );

  foreach($array as $key=>$value){
    echo $key."is".$value."<br>";
  }
  
?>