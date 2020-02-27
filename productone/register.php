<?php
 include 'header.php';

 session_start();

 include '../testone/connection.php';
?>

<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-md-6">
    <h2 class="text-center">Registeation</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-brown" name="register">Register</button>
    </form>
    </div>
  </div>
</div>

<?php
 include 'footer.php';

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