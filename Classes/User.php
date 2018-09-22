<?php

class User
{
  protected $id;
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $password;


  function __construct($nombre, $apellido, $email, $password)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->password =$password;
    $this->email = $email;
  }

  public function getId()
  {
      return $this->id;
  }

  public function getEmail()
  {
      return $this->email;
  }

  public function setEmail($email)
  {
      $this->email = $email;
  }

  public function getPassword()
  {
      return $this->password;
  }

  public function setPassword($password)
  {
      $this->password = $password;
  }
}

 ?>
