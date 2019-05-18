<?php
require_once 'Presentable.php';

Abstract Class Usuario implements Presentable

{
  protected $nombreCompleto;
  protected $fechaDeNacimiento;
  protected $email;
  protected $documento;
  protected $pasiDeNacimiento;

  public function __construct(string $nombreCompleto, string $fechaDeNacimiento) {
    $this->nombreCompleto = $nombreCompleto;
    $this->setFechaNacimiento($fechaDeNacimiento);
  }

  public function getNombre() {
    return $this->nombreCompleto;
  }

  public function setNombre($nombreCompleto) {
    $this->nombreCompleto = $nombreCompleto;
  }

  public function getFechaNacimiento() {
    return $this->fechaDeNacimiento;
  }

  public function setFechaNacimiento($fechaDeNacimiento) {
    $fecha = explode('-', $fechaDeNacimiento);
    $this->fechaDeNacimiento = implode('/', array_reverse($fecha));
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getYear() {
    $fecha = explode('/', $this->fechaDeNacimiento);
    return $fecha[2];
  }

  public function getAge() {
    return Date('Y') - $this->getYear();
  }

}

?>
