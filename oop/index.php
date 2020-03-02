<?php

include 'includes/autoloader.inc.php';

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

$new = new Pets();

$new->getThree();

$con = new MrConstruct("John doe");

unset($con); //destroy object

Person\Person2::newDrinkingAge(21);

echo Person\Person2::$drinkingAge;

?>

<h1>Blah blah blah</h1>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error autem esse eum optio vitae eos libero unde necessitatibus illum ut ipsa non tempore, assumenda id at rem. Commodi, vitae esse.</p>
  
</body>
</html>