<?php

class User extends Model
{
  public $table = 'User';
  public $columns = ['nombre', 'email', 'password'];

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
