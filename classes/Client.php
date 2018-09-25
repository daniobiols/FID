<?php

class Client extends User
{
  protected $direccion;
  protected $formaDePago;
  protected $rutaImagen;

  function __construct($direccion, $formaDePago, $rutaImagen)
  {
    $this->direccion $direccion;
    $this->formaDePago $formaDePago;
    $this->rutaImagen $rutaImagen;
    parent::__construct($nombre, $apellido, $email, $password);
  }
}
 ?>
