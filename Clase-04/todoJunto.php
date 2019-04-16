<?php

$funcionesEjecutadas = 0;

include('funciones.php');
include('superficie.php');

function superficieMayor($radio1, $radio2, $radio3) {
  $radio = mayor($radio1, $radio2, $radio3);
  return circulo($radio);
}

// echo superficieMayor(2,6,1);
// echo "<br>";
// echo $funcionesEjecutadas;

// rectangulo(2,2);
// echo "<br>";
// echo $funcionesEjecutadas;
//
// circulo(5);
// echo "<br>";
// echo $funcionesEjecutadas;

//Ejercicio 7

$oracion = "Me encanta php. A mi también me encanta php!";
$posicionPHP = strpos($oracion, "php");

echo "La primera aparición de la palabra PHP está en la posición $posicionPHP de la oración '<i>$oracion'</i>";
