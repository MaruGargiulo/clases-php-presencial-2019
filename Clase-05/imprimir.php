<?php

//-------------------------Datos enviados por GET--------------------------------------

// var_dump($_GET);

// echo $_GET["nombre"];
// echo "<br>";
// echo $_GET["email"];

//Imprime el valor que esté en la posición "nombre" de lo que haya viajado por get
//los nombres de las posiciones del array son los nombres que le ponemos a los inputs de nuestro formulario



//En el buscador del navegador:
//imprimir.php?nombre=Ana&apellido=Gonzalez&email=ana@gmail.com&colorPreferido=rojo

//La queryString empieza después del signo ?
//Todo lo que venga después se va a almacenar en la variable superglobal $_GET
//en forma de array asociativo --> nombre=valor

//Cuando hacemos el var_dump() se imprime lo que sea que llegue por el método GET



//-------------------------Datos enviados por POST--------------------------------------


// var_dump($_POST);


// var_dump(getallheaders());

// foreach(getallheaders() as $key => $value) {
//   echo "$key : $value <br>";
// }

// var_dump($_SERVER);
// var_dump($_FILES);
// var_dump($_REQUEST);
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($GLOBALS);

?>
