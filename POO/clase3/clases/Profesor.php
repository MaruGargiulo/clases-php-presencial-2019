<?php

require_once 'Usuario.php';

Class Profesor extends Usuario implements Presentable {

  public function presentarse() {
    return "Hola, soy $this->nombreCompleto, tu docente en
    Digital House. Tengo " . $this->getAge() . " años.";
  }

  public function saludoTuneado() {
    return parent::saludo() . " tralalandia.";
  }
}

?>
