<?php
 
 include 'connection.php';

 $statement = $conn->prepare('delete from testone_products where id=:id');

 $result = $statement->execute(['id'=>1]);

 if($result){
   echo "deleted";
 }
 else{
   echo "error";
 }
?>