<?php

$faq = [
  ["pregunta" => "¿Cuánto es 2 + 0?" , "respuesta" => "2"],
  ["pregunta" => "¿Cuánto es 2 + 1?" , "respuesta" => "3"],
  ["pregunta" => "¿Cuánto es 2 + 2?" , "respuesta" => "4"],
  ["pregunta" => "¿Cuánto es 2 + 3?" , "respuesta" => "5"],
  ["pregunta" => "¿Cuánto es 2 + 4?" , "respuesta" => "6"],
  ["pregunta" => "¿Cuánto es 2 + 5?" , "respuesta" => "7"],
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title>Contenido dinámico</title>
</head>
<body>


  <h1>Preguntas y respuestas --> <i>con foreach</i></h1>
  <?php foreach($faq as $preguntas) : ?>
    <p class="form-control faq">
      <strong> <?= $preguntas["pregunta"]; ?> </strong> <em> <?= $preguntas["respuesta"]; ?> </em>
    </p>
  <?php endforeach; ?>

  <br>
  <br>


  <h1>Preguntas y respuestas --> <i>con for</i></h1>
  <?php for($i = 0; $i < count($faq); $i++) : ?>
    <p class="form-control faq">
      <strong> <?= $faq[$i]["pregunta"]; ?> </strong> <em> <?= $faq[$i]["respuesta"]; ?> </em>
    </p>
  <?php endfor; ?>

</body>
</html>
