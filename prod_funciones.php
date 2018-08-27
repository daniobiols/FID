<?php


function validarProducto($prod_data, $prod_archivo) {

		$prod_nombre = trim($prod_data['prod_nombre']);
		$prod_descripcion=trim($prod_data['prod_descripcion']);
		// $prod_talla = trim($_POST['prod_talla']);
		$prod_categoria = trim($prod_data['prod_categoria']);
    $prod_subcategoria = trim($prod_data['prod_subcategoria']);
    $prod_precio=trim($prod_data['prod_precio']);
    $prod_precio_lista=trim($prod_data['prod_precio_lista']);
		$prod_color= trim($prod_data['prod_color']);
    $prod_errores=[];

    if ($prod_nombre=='') {
        $prod_errores['prod_nombre']="Ingrese el nombre del producto";
    }
    if ($prod_categoria=='') {
        $prod_errores['prod_categoria']="Ingrese Categoria";
    }
    if ($prod_subcategoria=='') {
        $prod_errores['prod_subcategoria']="Ingrese sub-categoria";
    }
    if ($prod_precio < 0) {
        $prod_errores['prod_precio']="Ingrese Precio al producto";
    }
    if($prod_precio_lista < 0){
      $prod_errores['prod_precio_lista']="Ingrese precio de lista para el producto";
    }
    if ($prod_color=='') {
      $prod_errores['prod_color']="Ingrese un color para el producto";
    }
    // $prod_errores = [];
    //
    return $prod_errores;
}
//
	function guardarProducto($prod_data,$prod_archivo) {
    $producto = [
      'prod_id' => traerUltimoProductoID(),
      'prod_nombre' => $prod_data['prod_nombre'],
      'prod_categoria' => $prod_data['prod_categoria'],
      'prod_subcategoria' => $prod_data['prod_subcategoria'],
      'prod_precio'=> $prod_data['prod_precio'],
      'prod_precio_lista'=>$prod_data['prod_precio_lista'],
      'prod_color'=>$prod_data['prod_color'],
      // 'prod_talla' => $prod_data['prod_talla'],
      'prod_descripcion' => $prod_data['prod_descripcion'],
      'prod_foto' => 'images/prod_img/'.$prod_data['prod_nombre'] .'.'.    pathinfo($prod_archivo['prod_foto']['name'], PATHINFO_EXTENSION)
    ];

    $productoJSON= json_encode($producto);
    file_put_contents('productos.json',$productoJSON.PHP_EOL,FILE_APPEND);
}
function guardarProdImagen($laImagen){
		$errores = [];

		if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
			// Capturo el nombre de la imagen, para obtener la extensión
			$nombreArchivo = $_FILES[$laImagen]['name'];
			// Obtengo la extensión de la imagen
			$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
			// Capturo el archivo temporal
			$archivoFisico = $_FILES[$laImagen]['tmp_name'];

			// Pregunto si la extensión es la deseada
			// if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
				// Armo la ruta donde queda gurdada la imagen
				$dondeEstoyParado = dirname(__FILE__);

				$rutaFinalConNombre = $dondeEstoyParado . '/img/prod_img' . $_POST['prod_nombre'] . '.' . $ext;

				// Subo la imagen definitivamente
				move_uploaded_file($archivoFisico, $rutaFinalConNombre);
		// 	} else {
		// 		$errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
		// 	}
		// } else {
		// 	// Genero error si no se puede subir
		// 	$errores['imagen'] = 'No subiste nada';
		// }

		return $errores;
	}
}



    // guardarProducto($_POST);
    // file_put_contents('productos.json',$productoJSON.PHP_EOL,FILE_APPEND);
  //
  // }
  //
  function traerTodosProductos(){
        $allProducts = file_get_contents('productos.json');
        $arrayDeJSON = explode(PHP_EOL, $allProducts);
        array_pop($arrayDeJSON);
        $arrayProductsPHP = [];

        foreach ($arrayDeJSON as $key => $unProductoJSON) {
          $arrayProductsPHP[] = json_decode($unProductoJSON, true);
        }

        return $arrayProductsPHP;
    }
  //
  //
  function traerUltimoProductoID(){
      $todos = traerTodosProductos();
      if (count($todos) == 0) {
        return 1;
      }
      $ultimo = array_pop($todos);
      $ultimoID = $ultimo['prod_id'];

      return $ultimoID +1;
    }
  //
  //
  //
  //
  //


    ?>
