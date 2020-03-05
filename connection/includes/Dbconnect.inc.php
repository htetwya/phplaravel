<?php

 class Dbconnect{

  private $host;
  private $dbname;
  private $dbuser;
  private $dbpwd;

  protected function connectDB(){

    $this->host = "localhost";
    $this->dbname = "testone";
    $this->dbuser = "root";
    $this->dbpwd = "";

    try{
    
      $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->dbuser","$this->dbpwd");
    
    }catch(PDOException $e){
    
      echo "Connection error: ".$e->getMessage();
    
    }

    return $conn;
    
  }
  

 }

?>