<?php
 
 include 'connection.php';
 
 $name="earph";
 $price="30000";
 $quantity=5;

 $statement = $conn->prepare("insert into testone_products (name,price,quantity) values (:name,:price,:quantity)");

 $result = $statement->execute(['name'=>$name,'price'=>$price,'quantity'=>$quantity]);

 if($result){

   echo "data inserted";
 }else{
   echo "error while inserting";
 }

?>