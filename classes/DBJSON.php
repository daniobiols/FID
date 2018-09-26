<?php

require_once ('classes/db.php');

class DbJSON extends DB
{
    public function insert($datos, $model)
    {
      $usuario =
      [
        "name" => $datos['name'],
        "email" => $datos['email'],
        "pass" => password_hash($datos['pass'], PASSWORD_DEFAULT),
      ];

      $usuarioJSON = json_encode($usuario);
      file_put_contents($model->table .'.json', $usuarioJSON . PHP_EOL, FILE_APPEND);
    }

    public function searchEmail($email)
    {
        //..
    }

    public function loadAll()
    {
        //...
    }
}
