<?php

$numeroMagico = 35;

//Ejercicio 1

//a.

function mayor($n1, $n2, $n3) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;

  if($n1 > $n2 && $n1 > $n3) {
    return $n1;
  }
  return $n2 > $n3 ? $n2 : $n3;
}
//
// echo mayor(5,7,3);

//b.

// function tabla($base, $limite){
//   $resultado = [];
//   for($i = $base; $i <= $limite; $i++) {
//     $resultado[] = $i;
//   }
//   return $resultado;
// }
//
// var_dump(tabla(3,9));

//d.

// function mayor($n1, $n2, $n3 = null) {
//   global $numeroMagico;
//
//   if( !is_numeric($n3) ) {
//     $n3 = $numeroMagico;
//   }
//
//   if($n1 > $n2 && $n1 > $n3) {
//     return $n1;
//   }
//
//   return $n2 > $n3 ? $n2 : $n3;
// }
//
// echo mayor(12,7,"Hola");

//e.

// function tabla($base, $limite = null){
//   global $numeroMagico;
//
//   $resultado = [];
//
//   if( !is_numeric($limite) ) {
//     $limite = $numeroMagico;
//   }
//
//   for($i = $base; $i <= $limite; $i++) {
//     $resultado[] = $i;
//   }
//   return $resultado;
// }
//
// var_dump(tabla(25));
