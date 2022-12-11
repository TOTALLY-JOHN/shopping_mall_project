<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arrayInput = $_POST['phpArrayInput'];
    $arrayInputArr = explode(',', $arrayInput);
    var_dump($arrayInputArr);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name="phpArrayInput"/>
    <br /><br />
    <input type="submit" value="Submit">
  </form>
</body>
</html>