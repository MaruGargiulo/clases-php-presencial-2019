<?php
  // var_dump($_GET);

  // Países
  $paises = [
    "Argentina",
    "Brasil",
    "Uruguay",
    "Chile",
    "Paraguay",
    "Colombia",
    "Perú",
    "Venezuela",
    "México",
    "Puerto Rico",
  ];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
   <form method='post' action="confirmation.php">
      <fieldset>
			<legend>REGISTRATE</legend>

			<div class='form-control'>
				<label for='name'>Nombre completo<span class="required">*</span>: </label>
				<input type='text' name='name'>
			</div>

			<div class='form-control'>
				<label for='email'>Email<span class="required">*</span>:</label>
				<input type='text' name='email'>
			</div>

			<div class='form-control'>
				<label for='username'>Nombre de usuario:</label>
				<input type='text' name='username'>
			</div>

      <div class='form-control'>
				<label for='pais'>Nacionalidad<span class="required">*</span>:</label>
				<select name="pais">
          <option value="">seleccionar una opción</option>
            <?php foreach($paises as $pais) : ?>
              <option value="<?= $pais ?>"> <?= $pais ?></option>
            <?php endforeach; ?>
        </select>
			</div>

      <div class='form-control'>
        <label for='pasatiempos'>Pasatiempos:</label>
        <p>
        <input type='checkbox' name='pasatiempos[]' value="escribir">Escribir
        <input type='checkbox' name='pasatiempos[]' value="mirar peliculas">Mirar películas
        <input type='checkbox' name='pasatiempos[]' value="correr">Correr
        <input type='checkbox' name='pasatiempos[]' value="tocar la guitarra">Tocar la guitarra
        <input type='checkbox' name='pasatiempos[]' value="codear">Codear
        <input type='checkbox' name='pasatiempos[]' value="kartings">Kartings
        </p>
      </div>

      <?php if( isset($_GET["versionCorta"]) && $_GET["versionCorta"] !== "true") : ?>
      <div class='form-control'>
        <label for='adress'>Dirección:</label>
        <input type='text' name='adress'>
      </div>

      <div class='form-control'>
        <label for='phone-number'>Teléfono de contacto:</label>
        <input type='text' name='phone-number'>
      </div>
      <?php endif; ?>

      <div class='form-control'>
        <label for='password'>Contraseña<span class="required">*</span>:</label>
        <input type='password' name='password'>
      </div>

      <?php if( isset($_GET["versionCorta"]) && $_GET["versionCorta"] !== "true") : ?>
      <div class='form-control'>
        <label for='confirm-password'>Confirmar contraseña<span class="required">*</span>:</label>
        <input type='confirm-password' name='confirm-password'>
      </div>
      <?php endif; ?>

			<div>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
