<?php

require_once 'Usuario.php';

Class Alumno extends Usuario implements Presentable {

  public function presentarse() {
    return "Hola mi nombre es $this->nombreCompleto, soy alumno de Full Stack en
    Digital House y tengo " . $this->getAge() . " años.";
  }

}

?>
