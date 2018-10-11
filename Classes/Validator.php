<?php

require_once("DB.php");

class Validator
{
  function validarLogin($datos)
  {
    $db = new DbMySQL();

    $errores = [];

    foreach ($datos as $clave => $valor)
    {
      $datos[$clave] = trim($valor);
    }
    // var_dump($db->searchEmail($datos["email"]));
    // exit

    if ($datos["email"] == "")
    {
      $errores["email"] = "Ingresa tu email";
    } else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"] = "El mail tiene que ser un mail";
    } else if ($db->searchEmail($datos["email"]) == null) {
      $errores["email"] = "No estas registrado en nuestra plataforma";
    }

    $usuario = $db->searchEmail($datos["email"]);
    $usuarioPass = $db->getPassword($datos["email"]);

    // var_dump($usuarioPass->datos);

    if ($datos["password"] == "")
    {
      $errores["password"] = "Por favor ingresa una contraseña";
    } else if ($usuario != null) {
      $hash = $db->getPassword($datos["email"]);
      // var_dump($hash);
      if (!password_verify($datos["password"], $hash))
      {
        $errores["password"] = "La contraseña no es valida";
      }
    }
    return $errores;
  }

  function validarRegistro($datos)
  {

    $db = new DbMySQL();
    $usuario = $db->searchEmail($datos["email"]);
    $usuarioPass = $db->getPassword($datos["email"]);
    $email ="";
    $errores = [];

    // var_dump($usuario);
    // echo "<br>";
    // var_dump($usuarioPass->datos);

    foreach ($usuario as $value)
    {
      $email = $value;
    }

    foreach ($datos as $clave => $valor)
    {
      $datos[$clave] = trim($valor);
    }
    // var_dump($db->searchEmail($datos["email"]));
    // exit;
    if ($datos["name"] == "")
    {
      $errores["name"] = "Ingresa tu nombre";
    }

    if ($datos["email"] == $email)
    {
      $errores["email"] = "Este correo ya existe";
    }
    if ($datos["email"] == "")
    {
      $errores["email"] = "Ingresa tu email";
    } else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"] = "El mail tiene que ser un mail";
    }



    if ($datos["password"] == "")
    {
      $errores["password"] = "Por favor ingresa una contraseña";
    }

    if ($datos["password"] != $datos["rpassword"])
    {
      $errores["rpassword"] = "Las contraseñas no coinciden";
    }

    return $errores;
  }
}
