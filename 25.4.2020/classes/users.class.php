<?php

include 'connectDb.class.php';

 class Users extends connectDb{

  public function getAllUsers(){
    
    //get the connection from parent class
    $conn = $this->connect();

    //retrieve data from database
    $statement = $conn->prepare('select * from testone_users');
    $result = $statement->execute();
    if($result){

      $rows = $statement->fetchAll();

      foreach($rows as $val){
        
        echo $val['username'];
      }
      
    }else{

      echo "Cannot retrieve data";
    }
  }

  public function getUserById($id){
    
    //get the connection from parent class
    $conn = $this->connect();

    //retrieve data from database
    $statement = $conn->prepare('select * from testone_users where id=:id');
    $result = $statement->execute(['id'=>$id]);
    if($result){

      $row = $statement->fetch();

      echo $row['username'];
      
    }else{

      echo "Cannot retrieve data";
    }
  }
  
  

 }

?>