<?php

 spl_autoload_register("myAutoloader");

 function myAutoloader($class){
   
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  if(strpos($url,'includes')){
    
    $path = "../classes/";

  }else{

    $path = "classes/";
  }

  $classname = $class;
  $extension = ".class.php";

  $fullpath = $path.$classname.$extension;

  include_once $fullpath;


 }


?>