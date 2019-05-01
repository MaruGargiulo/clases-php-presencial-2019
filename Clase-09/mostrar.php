<?php

session_start();
if(isset($_SESSION["contador"])) {
  echo $_SESSION["contador"] . "<br>";
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="modificar.php">Volver...</a>
  </body>
</html>
