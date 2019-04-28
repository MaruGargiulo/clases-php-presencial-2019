<?php

require('funciones.php');

if($_POST) {

  //llamo a la función validar() que me va a devolver un array de errores, en el caso de que los haya
  //creo una variable y almaceno ahí lo que me devuelva la función validar()
  $errores = validar($_POST);

  //pregunto si está vació el array de errores
  //si está vacío, quiere decir que pasó las validaciones
  //y almaceno a ese usuario en el json de ususarios
  if(count($errores) == 0) {

    //guardo a mi usuario
    //la función saveUser me retorna un array (ver en funciones)
    $nuevoUsuario = saveUser($_POST);

    //me traigo el archivo json de mis usuarios
    $listaDeUsuarios = file_get_contents("usuarios.json");

    //convierto el json de usuarios a formato array
    $usuariosArray = json_decode($listaDeUsuarios, true);

    //en la útlima posición disponible del array de usuarios, guardo al nuevo usuario
    $usuariosArray[] = $nuevoUsuario;

    //ahora que ya guardé a mi nuevo usuario, convierto a la lista completa de usuarios en formato Json
    $todosLosUsuarios = json_encode($usuariosArray);

    //guardo el json completo de los usuarios en el archivo usuarios.json
    file_put_contents("usuarios.json", $todosLosUsuarios);

    //lo redirecciono al usuario a la página de login para que inicie sesión
    header('Location: login.php');
  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact us</title>
  <link rel="stylesheet" href="master.css">
</head>
<body>
  <form method='post' action="">
    <fieldset >
      <legend>REGISTRATE</legend>

      <!-- NOMBRE -->
      <div class='form-control'>
        <label for='name'>Nombre completo<span class="required">*</span>: </label>
        <input type='text' name='name' value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>">
      </div>

      <!-- Si existe la posición name en el array de errores, significa que almacenó un error y le pido que lo muestre -->
      <?php if(isset($errores["name"])) : ?>
        <p class="error"> <?= $errores["name"] ?> </p>
      <?php endif; ?>
      <!-- FIN NOMBRE -->

      <!-- EMAIL -->
      <div class='form-control'>
        <label for='email'>Email<span class="required">*</span>:</label>
        <input type='text' name='email' value="<?= isset($_POST['email']) ? $_POST['email'] : "" ?>">
      </div>

      <!-- Si existe la posición email en el array de errores, significa que almacenó un error y le pido que lo muestre -->
      <?php if(isset($errores["email"])) : ?>
        <p class="error"> <?= $errores["email"] ?> </p>
      <?php endif; ?>
      <!-- FIN EMAIL -->

      <!-- NOMBRE DE USUSARIO -->
      <div class='form-control'>
        <label for='username'>Nombre de usuario:</label>
        <input type='text' name='username' value="<?= isset($_POST['username']) ? $_POST['username'] : "" ?>">
      </div>

      <!-- Si existe la posición username en el array de errores, significa que almacenó un error y le pido que lo muestre -->
      <?php if(isset($errores["username"])) : ?>
        <p class="error"> <?= $errores["username"] ?> </p>
      <?php endif; ?>
      <!-- FIN NOMBRE DE USUSARIO -->

      <!-- CONTRASEÑA -->
      <div class='form-control'>
        <label for='password'>Contraseña<span class="required">*</span>:</label>
        <input type='password' name='password'>
      </div>

      <!-- Si existe la posición password en el array de errores, significa que almacenó un error y le pido que lo muestre -->
      <?php if(isset($errores["password"])) : ?>
        <p class="error"> <?= $errores["password"] ?> </p>
      <?php endif; ?>
      <!-- FIN CONTRASEÑA -->

      <!-- CONFIRMAR CONTRASEÑA -->
      <div class='form-control'>
        <label for='confirm-password'>Confirmar contraseña<span class="required">*</span>:</label>
        <input type='password' name='confirm-password'>
      </div>

      <!-- Si existe la posición cpassword en el array de errores, significa que almacenó un error y le pido que lo muestre -->
      <?php if(isset($errores["cpassword"])) : ?>
        <p class="error"> <?= $errores["cpassword"] ?> </p>
      <?php endif; ?>
      <!-- FIN CONFIRMAR CONTRASEÑA -->

      <div>
        <button type="submit">ENVIAR</button>
      </div>

    </fieldset>
  </form>
</body>
</html>
