<?php

 
spl_autoload_register("myAutoloader");

function myAutoloader($class){

  $path = "classes/";
  $className = $class;
  $extension = ".class.php";
  $fullPath = $path.$className.$extension;

  include_once($fullPath);
  
}

?>