<?php

if($_POST) {

  //convierto en array el json que me traigo con file_get_contents
  $usuariosArray = json_decode(file_get_contents("usuarios.json"), true);

  //hago un foreach para recorrer la lista de todos los usuarios y buscar al que se quiere loguear
  //cada posición de ese array va a ser un usuario
  foreach($usuariosArray as $usuario) {
    if($_POST["email"] == $usuario["email"]) {
      if(password_verify($_POST["password"], $usuario["password"])) {
        header('Location: exito.php');
      }
    }
  }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title>Perfil</title>
</head>
<body>

  <fieldset>
    <legend>Iniciar sesión</legend>
    <form action="" method="post">

      <div class='form-control'>
        <label for='email'>Email</label>
        <input type='text' name='email' value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>">
      </div>

      <div class='form-control'>
        <label for='password'>Password</label>
        <input type='password' name='password' value="">
      </div>

      <div>
        <button type="submit">Iniciar sesión</button>
      </div>

    </form>
  </fieldset>

</body>
</html>
