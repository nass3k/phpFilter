<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form action="index.php" method="post">
    <p> <b>Фильтр:</b>
    <input type="text" name="text">
    <select  name="select">
      <option value="autor" name="autor">По автору</option>
      <option value="book" name="book">По названию книги</option>
    </select>
    <input type="submit" name="submit" value="Фильтровать"></p>
  </form>

</body>
</html>
<?php
include "inc.php";
?>
