<?php

 
class MrConstruct{
  
  private $name;

 public function __construct($name){ //constructor function
   
  $this->name = $name;

  echo $this->name;
 }

 public function __destruct(){
   
  echo "this is destructor";
 }
 

 
 
}

?>