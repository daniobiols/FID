<?php

require_once('Category.php');
require_once('Model.php');

class Product extends Model
{
  public $table = 'Products';
  public $columns = ['name','product_code','product_type','size','color','is_popular','price','price_list',    'quantity','description','image','categories_id', 'subcategories_id'];



  	public function guardarProdImagen($laImagen,$nombreImagen){
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


}
 ?>
