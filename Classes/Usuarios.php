<?php

class Usuarios
{
  protected $id;
  protected $nombre;
  protected $email;
  protected $password;


  function __construct($nombre, $email, $password)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->password =$password;
    $this->email = $email;
  }

  public function getId()
  {
      return $this->id;
  }

  public function setId($id)
  {
      $this->id = $id;
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
