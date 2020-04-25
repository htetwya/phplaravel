<?php

 include 'includes/classAutoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

 $userObj = new Users();
 $userObj->getAllUsers();echo "<br>";
 $userObj->getUserById(2);

 $productObj = new Products();

?>
  
</body>
</html>