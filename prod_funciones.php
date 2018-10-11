<?php


function validarProducto($prod_data, $prod_archivo) {

		$prod_nombre = trim($prod_data['prod_nombre']);
		$prod_codigo =trim($prod_data['prod_codigo']);
		$prod_genero = trim($prod_data['prod_genero']);
		$prod_categoria = trim($prod_data['prod_categoria']);
		$prod_tipo=trim($prod_data['prod_tipo']);
		$prod_talla = trim($prod_data['prod_talla']);
		$prod_color= trim($prod_data['prod_color']);
		$prod_cantidad= trim($prod_data['prod_cantidad']);
		$prod_precio=trim($prod_data['prod_precio']);
    $prod_precio_lista=trim($prod_data['prod_precio_lista']);
		$prod_descripcion=trim($prod_data['prod_descripcion']);
    // $prod_subcategoria = trim($prod_data['prod_subcategoria']);
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
    // $prod_errores = [];
    //
    return $prod_errores;
}
	// $nombreImagen=uniqid();

	function guardarProducto($prod_data,$prod_archivo,$nombreImagen) {
    $producto = [
      'prod_id' => traerUltimoProductoID(),
      'prod_nombre' => $prod_data['prod_nombre'],
			'prod_genero' => $prod_data['prod_genero'],
			'prod_codigo'=> $prod_data['prod_codigo'],
      'prod_categoria' => $prod_data['prod_categoria'],
			'prod_tipo'=> $prod_data['prod_tipo'],
			'prod_talla'=>$prod_data['prod_talla'],
			'prod_color'=>$prod_data['prod_color'],
			'prod_destacado'=>$prod_data['prod_destacado']??0 ,
      'prod_precio'=> $prod_data['prod_precio'],
      'prod_precio_lista'=>$prod_data['prod_precio_lista'],
      'prod_cantidad' => $prod_data['prod_cantidad'],
      'prod_descripcion' => $prod_data['prod_descripcion'],
      'prod_foto' => 'images/prod_img/'.$nombreImagen.'.'.pathinfo($prod_archivo['prod_foto']['name'], PATHINFO_EXTENSION)
    ];

    $productoJSON= json_encode($producto);
    file_put_contents('productos.json',$productoJSON.PHP_EOL,FILE_APPEND);
		// return $nombrefoto=$producto['prod_foto'];

}
function guardarProdImagen($laImagen,$nombreImagen){
		$prod_errores = [];
		// var_dump($_FILES);
// var_dump()
		if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
			// Capturo el nombre de la imagen, para obtener la extensión
			$nombreArchivo = $_FILES[$laImagen]['name'];
			// Obtengo la extensión de la imagen
			$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
			// Capturo el archivo temporal
			$archivoFisico = $_FILES[$laImagen]['tmp_name'];
			// var_dump($_FILES);
			// Pregunto si la extensión es la deseada
			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
				// Armo la ruta donde queda gurdada la imagen
				$dondeEstoyParado = dirname(__FILE__);

				$rutaFinalConNombre = $dondeEstoyParado . '/images/prod_img/' .$nombreImagen. '.' . $ext;

				// Subo la imagen definitivamente
				move_uploaded_file($archivoFisico, $rutaFinalConNombre);
			} else {
				$prod_errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
			}
		} else {
			// Genero error si no se puede subir
			$prod_errores['prod_img'] = 'No subiste nada';
		}

		return $prod_errores;
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
  function traerPorProductID($prod_id){
	      $productos = traerTodosProductos();
	      foreach ($productos as $producto) {
	          if ($producto['prod_id'] == $prod_id) {
	              return $producto;
	          }
	      }
	      return false;
	  }
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

    ?>
