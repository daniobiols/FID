<?php

class Validator
{
  public function validateLogin($dato)
  {
    $email = trim($data['email']);
    $pass = trim($data['passLog']);
    $errores = [];

    if ($email == '') {
      $errores['emailLog']  = 'Ingresa tu email';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $errores['emailLog']  = 'Por favor compelta tu email con un formato valido';
    }elseif (!$usuario = traerEmail($email)) {
      $errores['emailLog']  = 'El usuario no existe. Crear una cuenta';
    }

    if ($pass == '') {
      $errores['passReg'] = $errores['passLog'];
      $errores['passLog']  = 'Ingresa una contraseña valida';
    }elseif (!password_verify($pass, $usuario['passReg'])) {
      $errores['passLog']  = 'Contraseña no valida';
    }

    return $errores;
  }

  public function validateInfo()
  {
    return $errores;
  }

}
 ?>
