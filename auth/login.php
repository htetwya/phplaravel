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

  <?php
    if(isset($_GET['message'])){

      echo $_GET['message'];
    }
  ?>

  <form action="" method="POST">
    Email <input type="email" name="email"><br>
    password <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
  </form>

  

  <?php
   
    if(isset($_POST['login'])){ //test the button is pressed or not
      
      $email = $_POST['email'];
      $password = md5($_POST['password']);


      $statement = $conn->prepare('select id from testone_users where email=:email and password=:password');

      $result = $statement->execute(['email'=>$email,'password'=>$password]);

      $row = $statement->fetch(); // 

      var_dump($row);

      if(!$row){
        header('location:login.php?message=Credentials not found');
      }else{

        $_SESSION['email']=$email;
        header('location:welcome.php');
      }

    }

  ?>
</body>
</html>