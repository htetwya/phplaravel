<?php


  include 'connection.php';

  $statement = $conn->prepare('update testone_products set name=:name where id=:id');

  $result = $statement->execute(['name'=>'phone','id'=>1]);

  if($result){
    echo "updated";
  
  }else{
    echo "error";
  }
?>