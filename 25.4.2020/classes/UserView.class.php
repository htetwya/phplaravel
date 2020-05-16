<?php

include('users.class.php');

 class UserView extends users{

  public function showUsers(){
    
    $users = $this->getAllUsers();

    foreach($users as $user){

      echo $user['username']." : ".$user['email']."<br>";
    }


  }
  
   
 }

?>