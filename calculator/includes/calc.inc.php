<?php

declare (strict_types=1);

include "autoloader.inc.php";

 if(isset($_POST['calculate'])){

  $number1 = $_POST['num1'];
  $number2 = $_POST['num2'];
  $operator = $_POST['operator'];

  try{
  
    $calculation = new Calculator((int) $number1,(int) $number2,$operator);
  
  }catch(TypeError $e){
  
    echo "type error:".$e->getMessage();
  
  }

  echo $calculation->calculate();
   
  


 }

?>