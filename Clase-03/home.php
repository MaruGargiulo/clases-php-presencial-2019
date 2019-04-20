<?php


include('paises.php');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de países</title>
  </head>
  <body>

    <!-- Ejercicio 13 -->
    <h2>Lista de países del Mundo</h2>
    <p><i>Con PHP embebido</i> 🤓</p>

    <ul>
      <?php foreach($paisesDelMundo as $pais => $capital) : ?>
      <li> La capital de <?= $pais ?> es: <?= $capital ?> </li>
      <?php endforeach; ?>
    </ul>


    <!-- Ejercicio 14 -->
    <h2>Lista de Ciudades de América Latina</h2>
    <p><i>Con PHP embebido</i> 🤓</p>

    <?php foreach($paisesAmericaLatina as $pais => $ciudades) : ?>
    <p> Las ciudades de <?= $pais ?> son: </p>
      <ul>
        <?php foreach($ciudades as $ciudad) : ?>
        <li> <?= $ciudad; ?> </li>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>


    <!-- Ejercicio 15 -->
    <h2>Lista de Países de América</h2>
    <p><i>Con PHP embebido</i> 🤓</p>

    <?php foreach($paisesAmericanos as $pais => $data) : ?>
      <?php if($data["esAmericano"] === true) : ?>
        <p> Las ciudades de <?= $pais ?> son: </p>
        <ul>
          <?php foreach($data["ciudades"] as $ciudad) : ?>
          <li> <?= $ciudad; ?> </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endforeach; ?>

  </body>
</html>
