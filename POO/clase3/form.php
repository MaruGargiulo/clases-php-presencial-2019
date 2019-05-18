<?php
require_once 'clases/Usuario.php';
require_once 'clases/Presentable.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';

session_start();

if($_POST)
{

  if($_POST['tipo'] == "p")
  {
    $usuario = new Profesor($_POST['name'], $_POST['fecha-nacimiento']);
  }
  else
  {
    $usuario = new Alumno($_POST['name'], $_POST['fecha-nacimiento']);
  }

  $_SESSION['usuario'] = $usuario;
  // var_dump($_SESSION['usuario']);
  header('Location: profile.php');

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="" method="post">
    <p>
      <label for="">Nombre completo:</label>
      <input type="text" name="name" value="">
    </p>

    <p>
      <label for="">Fecha de nacimiento:</label>
      <input type="date" name="fecha-nacimiento" value="">
    </p>

    <p>
      <label for="">Tipo:</label>
      <br>
      <input type="radio" name="tipo" value="p">Profesor
      <br>
      <input type="radio" name="tipo" value="a">Alumno
    </p>

    <p>
      <input type="submit" name="" value="Enviar">
    </p>
  </form>

</body>
</html>
