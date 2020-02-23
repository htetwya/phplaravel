<?php
 
include 'connection.php';

$id=2;
$statement =$conn->prepare('select * from testone_products');

$result = $statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_OBJ); //PDO::FETCH_OBJ(object) , PDO::FETCH_ASSOC(array)

var_dump($rows);

foreach($rows as $row){

  echo $row->quantity."<br>";
}



?>