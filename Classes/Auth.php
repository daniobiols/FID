<?php


class Auth
{

  function __construct()
  {
    session_start();

    if (!isset($_SESSION["id"]) && isset($_COOKIE["id"]))
    {
      $_SESSION["id"] = $_COOKIE["id"];
    }
  }

  public function login()
  {
    $_SESSION["id"] = $emailLog;
  }

  public function loginControl()
  {
    return isset($_SESSION["id"]);
  }

  public function usuarioLogueado()
  {
    if ($this->loginControl()) {
        $email = $_SESSION["id"];
        return $db->searchEmail($email);
    } else {
        return NULL;
    }
  }

  public function logout()
  {
    session_destroy();
    setcookie("id", "", -1);
  }
}
 ?>
