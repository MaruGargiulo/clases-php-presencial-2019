<?php

//ejercicio 1

$numeroEntero = 4;
echo $numeroEntero;
echo "<br>";
var_dump($numeroEntero);

echo "<br><br>";

$numeroDecimal = 3.2;
echo $numeroDecimal;
echo "<br>";
var_dump($numeroDecimal);

echo "<br><br>";

$comillasSimples = 'Hola';
echo $comillasSimples;
echo "<br>";
var_dump($comillasSimples);

echo "<br><br>";

$comillasDobles = "Chau";
echo $comillasDobles;
echo "<br>";
var_dump($comillasDobles);

echo "<br><br>";

$numeroEntero = "Ford-K";
echo $numeroEntero;
echo "<br>";
var_dump($numeroEntero);
//sobre-escribo la variable y deja de ser un dato de tipo int para pasar a ser un dato de tipo string

echo "<br><br>";

$comillasSimples = 8.7;
echo $comillasSimples;
echo "<br>";
var_dump($comillasSimples);
//sobre-escribo la variable y deja de ser un dato de tipo string para pasar a ser un dato de tipo float

echo "<br><br>";

$numeroEntero = "3";
echo $numeroEntero;
echo "<br>";
var_dump($numeroEntero);
//todo lo que está entre comillas se interpreta como un string

echo "<br><br>";

//ejercicio 2

//Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado (underscore)

$uno = "Tres";
$dos = "tristes";
$tres = "tigres";
$cuatro = "tragan";
$cinco = "trigo";
$seis = "en";
$siete = "un";
$ocho = "trigal";

echo $uno . " " . $dos .  " " . $tres . " " . $cuatro . " " . $cinco . " " . $seis . " " . $siete . " " . $ocho . ".";
//contatenado con punto

echo "<br><br>";

echo "$uno $tres vienen derecho para acá. Rajemos.";
//concatenando dentro de las comillas dobles

echo "<br><br>";

//ejercicio 4

$animales = ["Perro", "Loro", "León", "Foca", "Gato"];
var_dump($animales);

echo "<br><br>";

//a.
$animales[] = "Jirafa";
$animales[] = "Tigre";
//si no le aclaro la posición, agrega a cada elemento al final del array
var_dump($animales);

echo "<br><br>";

//b.
echo "Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5] y $animales[6]";

echo "<br><br>";

//c.
$animales[0] = "Delfín";
var_dump($animales);

echo "<br><br>";

//d.
$animales[100] = "Rana";
var_dump($animales);
//si la posición no existe, almacena el dato al final del array, creando una posición nueva
//si existiera, sobre-escribiría el dato

echo "<br><br>";

//e.
$animales[16] = "Ágila";
var_dump($animales);

echo "<br><br>";

//ejercicio 5

$miAuto = [
  "marca" => "Ford",
  "modelo" => "K",
  "color" => "Azul petróleo",
  "año" => "2011",
  "patente" => "gil123"
];

//a.
$miAuto[0] = "Maru";
var_dump($miAuto);

echo "<br><br>";

//b.
$miAuto[14] = "SancorSeguros";
var_dump($miAuto);

echo "<br><br>";

//c.
$miAuto["poliza"] = "123456";
var_dump($miAuto);

echo "<br><br>";

//d.
$miAuto["patente"] = "ddu332";
var_dump($miAuto);

echo "<br><br>";

//e.
$miAuto[0] = "Toto";
var_dump($miAuto);

echo "<br><br>";

//ejercitio 6

$entero = 5;
$decimal = 2.5;

//a.
echo $entero + $decimal;

echo "<br><br>";

//b.
echo $entero - $decimal;

echo "<br><br>";

//c.
echo $entero / $decimal;

echo "<br><br>";

//d.
echo $entero * $decimal;

echo "<br><br>";

//e.
$resultado = $entero / $decimal;
echo $resultado;

echo "<br><br>";

//f.
$entero = $entero + 1;
$decimal = $decimal + 1;

//g.
$entero = $entero + 5;
$decimal = $decimal - 0.6;

//h.
$resultado = $entero * 2 + $decimal / ($entero / 2);
echo $resultado;

echo "<br><br>";

//ejercicio 7

$hola = "Hola";
$mundo = "mundo!";

$saludo = "$hola $mundo";
echo $saludo;

echo "<br><br>";

$saludoCompleto = "$saludo. Que bueno está PHP.";
echo $saludoCompleto;
