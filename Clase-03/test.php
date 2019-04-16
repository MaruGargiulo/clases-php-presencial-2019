<?php

//Ejercicio 1

// for($i = 1; $i <= 100; $i++) {
//   echo "Número $i <br>";
// }

//Ejercicio 2

// $numAleatorio = rand(1,100);
// for($i = 1; $i <= $numAleatorio; $i++) {
//   echo "Número $i <br>";
// }

//Ejercicio 3

// for($i = 1; $i <= 10; $i++) {
//   echo "2 x $i = " . $i * 2 . "<br>";
// }

//Ejercicio 4

// $number = 100;
// while($number >= 85) {
//   echo $number . "<br>";
//   $number--;
// }

//Ejercicio 5

// $contador = 1;
// while($contador <= 5) {
//   echo $contador * 2 . "<br>";
//   $contador++;
// }

//Ejercicio 6

// $tiraMonedas = 0;
// $cara = 0;
//
// while($cara < 5) {
//   $tiraMonedas++;
//   $moneda = rand(0,1);
//   if($moneda == 1) {
//     $cara++;
//   }
// }
//
// echo "Llevó $tiraMonedas tiros para que saliera el número 5";

//Ejercicio 7

// $tiros = 0;
// $cara = 0;
// do {
//   $tiros++;
//   $moneda = rand(0,1);
//   if($moneda ==1) {
//     $cara++;
//   }
// } while ($cara < 1);
//
// echo "Llevó $tiros tiros para que saliera cara";

//Ejercicio 8

// $nombresPropios = ["Maru", "Juan", "Alan", "Lilo", "Steach"];

//Recorriendo el array con un for

// for($i = 0; $i < count($nombresPropios); $i++) {
//   echo $nombresPropios[$i] . "<br>";
// }


//Recorriendo el array con un while

// $indiceArray = 0;
// while($indiceArray < count($nombresPropios)) {
//   echo $nombresPropios[$indiceArray] . "<br>";
//   $indiceArray++;
// }


//Recorriendo el array con un do while

// $indiceArray = 0;
// do {
//   echo $nombresPropios[$indiceArray] . "<br>";
//   $indiceArray++;
// } while($indiceArray < count($nombresPropios));


//Recorriendo el array con un foreach

// foreach ($nombresPropios as $value) {
//   echo $value . "<br>";
// }


//Ejercicio 9

// $arrayNum = [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];

//Recorriendo el array con un for

// for($i = 0; $i < count($arrayNum); $i++) {
//   if($arrayNum[$i] !== 5) {
//     echo $arrayNum[$i] . "<br>";
//   } else {
//     echo "Se encontró un " . $arrayNum[$i];
//     break;
//   }
// }


//Recorriendo el array con un while

// $indiceArray = 0;
// while($indiceArray < count($arrayNum)) {
//   echo $arrayNum[$indiceArray] !== 5 ? $arrayNum[$indiceArray] : "Se encontró un " . $arrayNum[$indiceArray];
//   $indiceArray++;
// }

//Ejercicio 10
