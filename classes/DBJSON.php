<?php

require_once ('classes/db.php');

class DbJSON extends DB
{
    public function insert($datos, $model)
    {
      // echo "<br>";
      // echo "DBJason - Datos tiene: ";
      // echo "<br>";
      // var_dump($datos);
      // echo "<br>";
      // echo "<br>";
      // echo "DBJason - model tiene: ";
      // echo "<br>";
      // var_dump($model);

      $usuario = [$model->table => $datos];
      //
      // $usuario =
      // [
      //   "name" => $datos['name'],
      //   "email" => $datos['email'],
      //   "pass" => password_hash($datos['pass'], PASSWORD_DEFAULT),
      // ];
      //
      // echo "<br>";
      // echo "DBJason - Usuario tiene: ";
      // echo "<br>";
      // var_dump($usuario);
      // echo "<br>";

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
