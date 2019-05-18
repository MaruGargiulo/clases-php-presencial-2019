<?php

require_once 'clases/Usuario.php';
require_once 'clases/Presentable.php';
require_once 'clases/Alumno.php';
require_once 'clases/Profesor.php';

session_start();

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php if($usuario instanceof Profesor) : ?>
    <div style="font-family:monospace;padding:12px;background:lightblue;font-size:1.2em;">
      <p> <?= $usuario->presentarse(); ?> </p>
    </div>
  <?php endif; ?>

  <?php if($usuario instanceof Alumno) : ?>
    <div style="font-family:monospace;padding:12px;background:lightgreen;font-size:1.2em;">
      <p> <?= $usuario->presentarse(); ?> </p>
    </div>
  <?php endif; ?>


</body>
</html>
