<?php

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="includes/calc.inc.php" method="POST">
    <input type="number" name="num1" placeholder="Type number one" min="0"/>
    <select name="operator">
      <option value="add">Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <input type="number" name="num2" placeholder="Type number two" min="0"/>
    <input type="submit" name="calculate" value="GO"/>
  </form>
</body>
</html>