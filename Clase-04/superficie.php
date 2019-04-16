<?php

//Ejercicio 2

//a.

function triangulo($base, $altura) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * ($altura / 2);
}


//b.

function rectangulo($base, $altura) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $altura;
}


//c.

function cuadrado($lado) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $lado * $lado;
}

//d.

function circulo($radio) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return pi() * $radio * $radio;
}
