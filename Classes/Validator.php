<?php

required_once('classes/db.php');
require_once('classes/DBMySQL.php');
require_once('classes/User.php');

class Validator
{
  public function validarLogin()
  {
    foreach ($datos as $clave => $valor)
    {
      $datos[$clave] = trim($valor);
    }

    if ($datos["email"] == "")
    {
      $errores["email"] = "Y el email?";
    } else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false)
    {
      $errores["mail"] = "El mail tiene que ser un mail";
    } else if ($db->buscamePorEmail($datos["email"]) == null) {
        $errores["mail"] = "No estas registrado en nuestra plataforma";
    }

    $usuario = $db->buscamePorEmail($datos["email"]);
    if ($datos["password"] == "")
    {
        $errores["password"] = "No llenaste la contraseña";
    } else if ($usuario != null) {
        if (password_verify($datos["password"], $usuario->getPassword()) == false)
        {
            $errores["password"] = "La contraseña no es valida";
        }
    }

    return $errores;
  }

  function validarInformacion($informacion, DB $db)
  {
    $errores = [];

    foreach ($informacion as $clave => $valor)
    {
        $informacion[$clave] = trim($valor);
    }

    if ($informacion["email"] == "")
    {
        $errores["email"] = "Y el email??";
    }
    else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
        $errores["mail"] = "El email no es valido";

    } else if ($db->buscamePorEmail($informacion["email"]) != NULL)
    {
        $errores["mail"] = "Ya hay un usuario con ese email";
    }

    if ($informacion["password"] == "")
    {
        $errores["password"] = "Sin contraseña no va la cosa";
    }

    if ($informacion["cpassword"] == "")
    {
        $errores["cpassword"] = "La contraseña va dos veces";
    }

    if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"])
    {
        $errores["password"] = "Las contraseñas no coinciden";
    }

    return $errores;
  }

}
 ?>
