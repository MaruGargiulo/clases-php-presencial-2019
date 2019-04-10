<?php

//Ejercicio 1

$numeroA = 15;
$numeroB = 22;

if($numeroA > $numeroB) {
  echo "El número mayor es el $numeroA";
} else {
  echo "El número mayor es el $numeroB";
}

echo "<hr>";

//Ejercicio 2

 $numeroRandom = rand(1,5);

 if($numeroRandom == 3 || $numeroRandom == 5) {
   echo "El número generado es $numeroRandom"; //hace un eco sólo cuando el número es 3 ó 5
 }


echo "<hr>";

//Ejercicio 3

if($numeroRandom != 3) {
  echo "El número NO es 3";
} else {
  $numeroRandom;
}

echo "<hr>";

//Ejercicio 4

$numeroRandomB = rand(1,100);

if($numeroRandomB > 50) {
  echo "El número es mayor a 50";
} else {
  echo "El número es menor a 50";
}

echo "<hr>";

//Ejercicio 5

$nombreDeUsuario = "admin";
$claveDeUsuario = "1234";

// if($nombreDeUsuario == "admin" && $claveDeUsuario == "1234") {
//   echo "Bienvenido a tu cuenta!";
// } else{
//   echo "Lo sentimos, hay un error de credenciales";
// }

if($nombreDeUsuario == "admin" && $claveDeUsuario == "1234") {
  echo "Bienvenido a tu cuenta!";
} else if($nombreDeUsuario !== "admin") {
  echo "El usuario no es correcto";
} else {
  echo "La contraseña no es válida";
}

echo "<hr>";

//Ejercicio 6

$edad = 18;
$casado = true;
$sexo = "Femenino";

if($edad >= 18 && !$casado || $sexo == "Otro") {
  echo "Bienvenido";
}

echo "<hr>";

//Ejercicio 7

$cantidadDeAlumnos = 23;

if($cantidadDeAlumnos) {
  echo "true";
} else {
  echo "false";
}

echo "<hr>";

//Ejercicio 8

if($i = 0) {
  echo "true";
} else {
  echo "false";
}

echo "<hr>";

//Ejercicio 9

$numero = 22;
echo $numero % 2 == 0 ? "El número es par" : "El número es impar";

echo "<hr>";

//Ejercicio 10

$nombre = "Pedro";

switch($nombre) {
  case "Pedro":
    echo "Hola $nombre";
    break;
  case "Martín":
    echo "Hola $nombre";
    break;
  case "Ana":
    echo "Hola $nombre";
    break;
  case "Juan":
    echo "Hola $nombre";
    break;
  default:
    echo "No hay a quien saludar";
    break;
}

echo "<hr>";

//Ejercicio 11

$colorRemera = "Rojo";

switch($colorRemera == "Rojo" || $colorRemera == "Azul" || $colorRemera == "Amarillo") {
  case true:
    echo "El color de la remera es un color primario";
    break;
  default:
    echo "La remera es de color desconocido";
}
