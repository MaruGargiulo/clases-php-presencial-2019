<?php

require('helpers.php');


//Esta función valida la info del formulario
function validar($data) {

  //Creo un array de errores vacío.
  $errores = [];

  //Validando campo Nombre
  $nombre = trim($data['name']);
  if($nombre == "") {
    //si existen errores en el campo del nombre, almaceno ese error en la posición "name" de mi array de errores
    $errores['name'] = "El nombre es obligatorio";
  }

  //Validando campo Email
  $email = trim($data['email']);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  if($email == ""){
    //si existen errores en el campo del email, almaceno ese error en la posición "email" de mi array de errores
    $errores['email'] = "El mail es obligatorio";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = "El email ingresado no es válido";
  }

  //Validando nombre de USUSARIO
  $userName = trim($data['username']);
  if(strlen($userName) < 5) {
    $errores['username'] = "El nombre de usuario debe tener al menos 5 caracteres";
  }

  //Validando campo Password
  $password = trim($data['password']);
  if($password == "" ) {
    //si existen errores en el campo del password, almaceno ese error en la posición "password" de mi array de errores
    $errores['password'] = "La contraseña es obligatoria";
  } elseif (strlen($password) < 6) {
    $errores['password'] = "La contraseña debe tener al menos 6 caracteres";
  }

  //Validando Confirmación de contraseña
  $cpassword = trim($data['confirm-password']);
  if($cpassword == "") {
    $errores['cpassword'] = "Debe repetir la contraseña para continuar";
  } elseif($password != $cpassword) {
    $errores['cpassword'] = "Las contraseñas no coinciden";
  }

  return $errores;

}
$miPassHash = password_hash("hola", PASSWORD_DEFAULT);

//Esta función me crea un array asociativo con los datos del usuario que valido
function saveUser($data) {
  $user = [
    "name" => $data["name"],
    "email" => $data["email"],
    "username" => $data["username"],
    "password" => password_hash($data["password"], PASSWORD_DEFAULT),
  ];

  return $user;
}


?>
