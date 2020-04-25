<?php

 spl_autoload_register('myClassAutoloader');

 function myClassAutoloader($class){
   
  $path = "classes/";
  $classname = $class;
  $extension = ".class.php";
  $fullPath = $path.$classname.$extension;

  include_once($fullPath);
 }
 

?>