<?php

 session_start();

 if(!$_SESSION['email']){

    header('location:login.php');

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Dashboard</title>
</head>
<body>
  <h1>you are logged in</h1>

  <?php
    echo $_SESSION['email'];
  ?>

  <b><a href="logout.php">Logout</a></b>
</body>
</html>