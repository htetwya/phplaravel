<?php
 include '../testone/connection.php';

 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <form action="" method="POST">
    Username <input type="text" name="username"><br>
    Email <input type="email" name="email"><br>
    password <input type="password" name="password"><br>
    <input type="submit" name="register" value="Register">
  </form>

  

  <?php

  // echo $_POST['name']; //echo out the value coming with name parameter
   
    if(isset($_POST['register'])){ //test the button is pressed or not
      
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);


      $statement = $conn->prepare('insert into testone_users (username,email,password) values (:username,:email,:password)');

      $result = $statement->execute(['username'=>$username,'email'=>$email,'password'=>$password]);

      if($result){

        $_SESSION['email']=$email;

        header('location:welcome.php');
      }

    }

  ?>
</body>
</html>