<?php

// var_dump($_COOKIE);

//Pregunto si está seteada la cookie bg-color
//de ser así, le asigno lo que sea que tenga como valor esa cookie a una variable $color
if(isset($_COOKIE['bg-color'])) {
  $color = $_COOKIE['bg-color'];
}


//si se envió el formulario...
if($_POST) {
  //pregunto si el usuario lo envió a través del botón reset
  if(isset($_POST["reset"])) {
    //vuelvo a setear la cookie bg-color con el valor "white"
    setcookie("bg-color", "white", time() + 60);
    //cuando llegue a la siguiente línea me va a redireccionar a la misma página
    //y va a leer el primer if de arriba
    //como la cookie bg-color tiene de valor "white", ahora mi variable $color es igual al string white
    header("Location: cookiesColores.php");
  } else {
    //si el usuario eligió un color, le asigno ese valor a la variable $color
    $color = $_POST["color"];
    //vuelvo a setear la cookie bg-color con el valor de $color, que ahora tiene asignado el color que eligó el usuario
    setcookie("bg-color", $color, time() + 60);
    //cuando llegue a la siguiente línea me va a redireccionar a la misma página
    //y va a leer el primer if de arriba
    //ahora la cookie bg-color tiene de valor el color que el usuario eligió
    header("Location: cookiesColores.php");
  }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<!--
Al body le asigno la variable $color como fondo. La primera vez que entre al archivo esta variable NO va a estar seteada.
Lo chequeo con in if ternario y, de ser así, que imprima el valor de esa variable. Si no, que imprima un string vacío.
-->
<body style="background-color:<?= isset($color) ? $color : ''; ?>">
  <form action="" method="post">
    <label for="">Elegir color para el fondo:</label>
    <select name="color">
      <option value="">Elegir color...</option>
      <!--
      Para hacer un poco más "funcional" el select, pregunto con un if ternario si la cookie está seteada y si ese valor es igual
      al string del value de ese select. De ser así, que imprima 'selected', para que se vea seleccionado el color. De lo contrario,
      string vacío.
      -->
      <option value="red" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'red' ? 'selected' : '' ?> >Rojo</option>
      <option value="green" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'green' ? 'selected' : '' ?>>Verde</option>
      <option value="blue" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'blue' ? 'selected' : '' ?>>Azul</option>
      <option value="purple" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'purple' ? 'selected' : '' ?>>Violeta</option>
      <option value="orange" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'orange' ? 'selected' : '' ?>>Naranja</option>
      <option value="yellow" <?= isset($_COOKIE["bg-color"]) && $_COOKIE["bg-color"] == 'yellow' ? 'selected' : '' ?>>Amarillo</option>
  </select>
  <input type="submit" name="set-color" value="Aceptar">
  <input type="submit" name="reset" value="Color por default">
</form>
</body>
</html>
