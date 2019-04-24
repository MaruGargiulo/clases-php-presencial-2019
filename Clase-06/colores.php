<?php

// $color = ["Blanco", "Verde", "Rojo"];

$colores = [
  "violeta" => "#AF0CAD",
  "verde" => "#36AF0C",
  "rojo" => "#AF0C0C"
];

$productos = [
  "Smart Tv" => 3500,
  "Celular Samsung" => 2300,
  "Taza Simpsons" => 350
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ejercicios adicionales</title>

  <style media="screen">

  * {
    font-family: monospace;
    font-size: 1.05em;
  }

  table {
    width: 400px;
    margin: 20px;
  }

  td {
    padding: 8px;
  }

  th {
    background-color: lightblue;
  }

  </style>

</head>
<body>


  <fieldset>
    <legend>Lista de colores</legend>
    <ul type="circle" class="form-control">
      <?php foreach($colores as $color => $valorHex) : ?>
        <li style="text-transform:uppercase; color:<?=$valorHex?>"><b><?= $color; ?></b></li>
      <?php endforeach; ?>
    </ul>
  </fieldset>

  <br>
  <br>

  <fieldset>
    <legend>Tabla de precios</legend>

    <table border="1" cellpadding="0" cellspacing="0">
      <tr>
        <th>Produtco</th>
        <th>Valor</th>
      </tr>
      <?php foreach($productos as $producto => $valor) : ?>
        <tr>
          <td><?= $producto ?></td>
          <td> $<?= $valor ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </fieldset>

</body>
</html>
