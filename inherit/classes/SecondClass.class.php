<?php

include 'FirstClass.class.php';

 class SecondClass extends FirstClass{

  public function showValue(){
    
    echo parent::VALUE;
  }
  

 }

 $obj = new SecondClass();

 echo $obj->showValue();

?>