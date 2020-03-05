<?php

include 'Dbconnect.inc.php';

 class User extends Dbconnect{
   
    protected function getUsers(){

      $conn = $this->connectDB();

      $statement = $conn->prepare("select * from testone_users");

      $result = $statement->execute();

      if($result){
        
        $rows = $statement->fetchAll();

      }else{

        echo "Cannot fetch data";
      }

      return $rows;
    }
 }

?>