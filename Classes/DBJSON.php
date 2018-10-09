<?php

require_once ('classes/db.php');
    class DbJSON extends DB
    {
        public function insert($datos, $model)
        {
          $usuario =
          [
            'id' => $this->traerUltimoID(),
            "nameReg" => $datos['name'],
            "emailReg" => $datos['email'],
            "passReg" => password_hash($datos['password'], PASSWORD_DEFAULT),
          ];
          $usuarioJSON = json_encode($usuario);
          file_put_contents($model->table .'.json', $usuarioJSON . PHP_EOL, FILE_APPEND);
        }

        public function traerUltimoID(){
            $todos = traerTodos();
            if (count($todos) == 0) {
              return 1;
            }
            $ultimo = array_pop($todos);
            $ultimoID = $ultimo['id'];

            return $ultimoID +1;
          }

        public function searchEmail($email)
        {
            //..
        }

        public function traeTodaLaBase()
        {
            //...
        }
    }
