<?php

 class Person2{
   
  public $name;
  public $age;
  public $job;

  public static $drinkingAge = 18; //static property

  public static function newDrinkingAge($age){
    
    Self::$drinkingAge = $age; //Self:: is equal to $this
  }
  

 }

 //static property and method do not require to create an object

?>