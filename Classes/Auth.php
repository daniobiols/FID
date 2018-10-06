<?php

required_once('classes/db.php');

class Auth
{

  function __construct()
  {
    session_start();

    if (!isset($_SESSION["estoyLogueado"]) && isset($_COOKIE["estoyLogueado"]))
    {
      $_SESSION["estoyLogueado"] = $_COOKIE["estoyLogueado"];
    }
  }

  public function login()
  {
    $_SESSION["estoyLogueado"] = $email;
  }

  public function loginControl()
  {
    return isset($_SESSION["estoyLogueado"]);
  }

  public function usuarioLogueado()
  {
    if ($this->loginControl()) {
        $email = $_SESSION["estoyLogueado"];
        return $db->buscamePorEmail($email);
    } else {
        return NULL;
    }
  }

  public function logout()
  {
    session_destroy();
    setcookie("estoyLogueado", "", -1);
  }
}
 ?>
