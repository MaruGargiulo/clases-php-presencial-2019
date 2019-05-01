<?php


session_start();
if($_POST) {
  if(isset($_POST["reiniciar"])) {
    $_SESSION["contador"] = 0;
  }
  if(isset($_POST["incrementar"])) {
    $_SESSION["contador"]++;
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <!-- Si no le aclaro el action, el formulario procesa la información en el mismo archivo en el que está -->
  <form action="" method="post">
    <input type="submit" name="reiniciar" value="Reiniciar">
    <br>
    <br>
    <input type="submit" name="incrementar" value="Incrementar">
    <br>
    <br>
    <a href="mostrar.php">Mostrar contador...</a>
  </form>

</body>
</html>
