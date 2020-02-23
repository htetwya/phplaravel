<?php

  try{

    $conn = new PDO('mysql:host=localhost;dbname=testone','root','');

  }catch(PDOException $e){

    echo $e;
  }



?>
