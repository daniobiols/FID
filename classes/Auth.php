<?php

require_once("DB.php")

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

  }

  public function loginControl()
  {

  }

  public function usuarioLogueado()
  {

  }

  public function logout()
  {

  }
}
 ?>
