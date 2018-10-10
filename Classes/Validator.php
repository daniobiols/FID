<?php

    require_once("DB.php");

    class Validator
    {
        //Esta clase solamente tiene dos metodos, y su unica responsabilidad para con nuestra App es devolver errores si los hubo

        function validarLogin($datos)
        {
          $db = new DbMySQL();

          $errores = [];

          foreach ($datos as $clave => $valor)
          {
            $datos[$clave] = trim($valor);
          }
          // var_dump($db->searchEmail($datos["email"]));
          // exit;

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
              if (password_verify($datos["password"], $usuarioPass->datos) == true)
              {
                $errores["password"] = "La contraseña no es valida";
              }
          }
          return $errores;
        }

        function validarInformacion($informacion, DB $db) {
            $errores = [];

            foreach ($informacion as $clave => $valor) {
                $informacion[$clave] = trim($valor);
            }

            if ($informacion["email"] == "") {
                $errores["email"] = "Y el email??";
            }
            else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
                $errores["mail"] = "El email no es valido";

            } else if ($db->searchEmail($informacion["email"]) != NULL) {
                //SI el metodo de DB searchEmail() da como resultado que NO es null, es porque el metodo pudo instanciar al usuario, entonces ya existe en nuestra base de datos.
                $errores["mail"] = "Ya hay un chabon con ese email";
            }

            if ($informacion["password"] == "") {
                $errores["password"] = "Sin contraseña no va la cosa";
            }

            if ($informacion["cpassword"] == "") {
                $errores["cpassword"] = "La contraseña va dos veces";
            }

            if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
                $errores["password"] = "Las contraseñas no coinciden";
            }

            return $errores;
        }

          function validarProductos($prod_data, $prod_archivo) {

          		$name = trim($prod_data['prod_nombre']);
          		$product_code =trim($prod_data['prod_codigo']);
          		$categories_id = trim($prod_data['prod_categoria']);
          		$type =trim($prod_data['prod_tipo']);
          		$size = trim($prod_data['prod_talla']);
          		$color= trim($prod_data['prod_color']);
          		$quantity= trim($prod_data['prod_cantidad']);
          		$price=trim($prod_data['prod_precio']);
              $price_list=trim($prod_data['prod_precio_lista']);
          		$description=trim($prod_data['prod_descripcion']);
              $subcategories_id = trim($prod_data['prod_subcategoria']);

              $prod_errores=[];

              if ($prod_nombre=='') {
                  $prod_errores['prod_nombre']="Ingrese el nombre del producto";
              }
              if ($prod_categoria=='') {
                  $prod_errores['prod_categoria']="Ingrese Categoria";
              }
              // if ($prod_cantidad <= 0) {
              //     $prod_errores['prod_cantidad']="Ingrese cantidad del producto";
              // }
              if ($prod_precio < 0) {
                  $prod_errores['prod_precio']="Ingrese Precio al producto";
              }
              if($prod_precio_lista < 0){
                $prod_errores['prod_precio_lista']="Ingrese precio de lista para el producto";
              }
              if ($prod_color=='') {
                $prod_errores['prod_color']="Ingrese un color para el producto";
              }

              return $prod_errores;
          }
        

    }
