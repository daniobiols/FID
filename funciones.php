<?php
session_start();

if (isset($_COOKIE['id'])) {
    $_SESSION['id'] = $_COOKIE['id'];
}

function validar($data){
    $name = trim($data['nameReg']);
    $email = trim($data['emailReg']);
    $pass = trim($data['passReg']);
    $rpass = trim($data['rpassReg']);
    $errores = [];

    if ($name == '') {
      $errores['nameReg']  = 'Por favor compelta tu nombre';
    }
    if (is_numeric($name)) {
      $errores['nameReg']  = 'Por favor compelta tu nombre con letras';
    }
    if ($email == '') {
        $errores['emailReg']  = 'Por favor compelta tu email';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errores['emailReg']  = 'Por favor compelta tu email con un formato valido';
    }elseif (traerEmail($email)) {
        $errores['emailReg']  = 'Este mail ya esta registrado';
    }
    if ($pass == '' || $rpass == '') {
        $errores['passReg']  = 'Por favor compelta tus contraseñas';
    }elseif ($pass != $rpass) {
        $errores['passReg']  = 'Tus contraseñas no coinciden';
    }
    return $errores;
  }

function guardarUsuario($data){
  $usuario =
  [
    'id' => traerUltimoID(),
    "nameReg" => $data['nameReg'],
    "emailReg" => $data['emailReg'],
    "passReg" => password_hash($data['passReg'], PASSWORD_DEFAULT),
    "rpassReg" => password_hash($data['rpassReg'], PASSWORD_DEFAULT),
  ];
  $usuarioJSON = json_encode($usuario);
  file_put_contents('usuarios.json', $usuarioJSON . PHP_EOL, FILE_APPEND);
}

function traerTodos(){
      $allUsers = file_get_contents('usuarios.json');
      $arrayDeJSON = explode(PHP_EOL, $allUsers);
      array_pop($arrayDeJSON);
      $arrayPHP = [];

      foreach ($arrayDeJSON as $key => $unUsuarioJSON) {
        $arrayPHP[] = json_decode($unUsuarioJSON, true);
      }

      return $arrayPHP;
  }

function traerEmail($email){
      $usuarios = traerTodos();

      foreach ($usuarios as $usuario) {
          if ($usuario['emailReg'] == $email) {
              return $usuario;
          }
      }
      return false;
  }

// function traerUltimoID(){
//     $todos = traerTodos();
//     if (count($todos) == 0) {
//       return 1;
//     }
//     $ultimo = array_pop($todos);
//     $ultimoID = $ultimo['id'];
//
//     return $ultimoID +1;
//   }

function traerPorID($id){
      $usuarios = traerTodos();

      foreach ($usuarios as $usuario) {
          if ($usuario['id'] == $id) {
              return $usuario;
          }
      }
      return false;
  }

// function validarLogin($data){
//   $email = trim($data['emailLog']);
//   $pass = trim($data['passLog']);
//   $errores = [];
//
//   if ($email == '') {
//     $errores['emailLog']  = 'Ingresa tu email';
//   }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
//     $errores['emailLog']  = 'Por favor compelta tu email con un formato valido';
//   }elseif (!$usuario = traerEmail($email)) {
//     $errores['emailLog']  = 'El usuario no existe. Crear una cuenta';
//   }
//
//   if ($pass == '') {
//     $errores['passReg'] = $errores['passLog'];
//     $errores['passLog']  = 'Ingresa una contraseña valida';
//   }elseif (!password_verify($pass, $usuario['passReg'])) {
//     $errores['passLog']  = 'Contraseña no valida';
//   }
//
//   return $errores;
//   }

function existeMail($email){
  $todos = traerTodos();

  foreach ($todos as $unUsuario) {
    if ($unUsuario['emailReg'] == $email) {
      return $unUsuario;
    }
  }
  return false;
}

function iniciar($usuario){
  $_SESSION['id'] = $usuario['id'];
}

function estaLogueado(){
  return isset($_SESSION['id']);
}

?>
