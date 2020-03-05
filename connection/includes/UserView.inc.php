<?php

include 'User.inc.php';

 class UserView extends User{
   
    public function showUserView(){
      
      $rows = $this->getUsers();

      foreach($rows as $row){
        
        echo $row['email'];
      }
    }
    
 }

?>