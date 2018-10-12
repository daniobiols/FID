<?php

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

    // foreach ($usuario as $value)
    // {
    //   $email = $value;
    // }

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

    if ($datos["email"] == $usuario)
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
