<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario PHP</title>
</head>
<body>
  <form action="imprimir.php" method="POST">

    <p>
      <label for="nombre"><strong>Nombre:</strong></label>
      <input type="text" name="nombre" id="nombre">
    </p>

    <p>
      <label for="email"><strong>E-mail:</strong></label>
      <input type="email" name="email" id="email">
    </p>

    <p>
      <label for="hobbies"><strong>¿Qué hobbies tenés?</strong></label>
      <p>
        <!-- el name que le ponga a mi input va a ser el nombre del índice en mi array asociativo $_POST ó $_GET
          Si el nombre es hobbies[] se va a generar un array numérico con cada valor
          de mi checkbox
        -->
        <input type="checkbox" name="hobbies[]" value="magic">Magic
        <input type="checkbox" name="hobbies[]" value="gta">GTA
        <input type="checkbox" name="hobbies[]" value="futbol">Fútbol
        <input type="checkbox" name="hobbies[]" value="tomar-mates">Tomar mates
      </p>
    </p>

    <p>
      <label for="estado-civil"><strong>Estado civil</strong></label>
      <p>
        <input type="radio" name="estado-civil" value="casado">Casado/a
        <input type="radio" name="estado-civil" value="pareja">En pareja
        <input type="radio" name="estado-civil" value="soltero">Soltero/a
      </p>
    </p>

    <p>
      <label for="nacionalidad"><strong>¿En qué país naciste?</strong></label>
      <select name="nacionalidad">
        <option selected value="">Seleccionar una opción</option>
        <option value="arg">Argentina</option>
        <option value="br">Brasil</option>
        <option value="ch">Chile</option>
        <option value="per">Perú</option>
      </select>
    </p>

    <button type="submit" name="submit" value="1">Enviar</button>
    <button type="reset">Resetear</button>


  </form>
</body>
</html>
