<?php
 

 class Preference{

    //variables
    //methods(functions)

    private $name="win thandar";
    private $username;

    public function getName(){

      // $name = "something";
      echo $this->name;
    }

    public function setUsername($username="user"){
      $this->username = $username;
    }

    public function getUsername(){
      echo $this->username;
    }
 }

 $obj = new Preference(); //create object 

 echo $obj->getName(); // object call method

 $obj->setUsername();

 $obj->getUsername();

?>
