     <?php
      require_once('prod_funciones.php');
      $ay_genero=['Hombre','Mujer','Niñe'];
      $ay_categoria=['Indumentaria','Calzado','Accesorio'];
      // $ay_subcategorias=[];
      $ay_tipoproducto=['Zapatillas','Zapatos','Botas','Borcegos','Remeras','Pantalones','Shorts','Buzos','Camperas','Bolsos','Mochilas','Medias'];
      $ay_tallas=['XS','S','M','L','XL','XXL','XXXL',26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46];

      // $ay_tallas=[
      //         'Calzado'=>[26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45],
      //         'Indumentaria'=>[
      //             'Pantalones'=>[26,28,30,32,34,36,38,40,42,44,46,48],
      //             'Otros'=>['XS','S','M','L','XL','XXL','XXXL']
      //   ]
      // ];
      $prod_errores=[];

       if($_POST){

          $prod_nombre = trim($_POST['prod_nombre']);
          $prod_codigo = trim($_POST['prod_codigo']);
          $prod_genero =  trim($_POST['prod_genero']);
      		$prod_categoria = trim($_POST['prod_categoria']);
          // $prod_cantidad = trim($_POST['prod_cantidad']);
      		// $prod_talla = trim($_POST['prod_talla']);

          // $prod_subcategoria= trim($_POST['prod_subcategoria']);
          $prod_precio=trim($_POST['prod_precio']);
          $prod_precio_lista=trim($_POST['prod_precio_lista']);
      		// $prod_color= trim($_POST['prod_color']);
          $prod_descripcion=trim($_POST['prod_descripcion']);

          $prod_errores=validarProducto($_POST,$_FILES);
          if (empty($prod_errores)) {

    				if (count($prod_errores) == 0) {
              $nombreImagen=uniqid();
      				guardarProducto($_POST,$_FILES,$nombreImagen) ;
              guardarProdImagen('prod_foto',$nombreImagen);
              //guardarProducto($_POST,$_FILES,$nombreImagen);
    				}
    			}
       }
     ?>

    <!DOCTYPE html>
    <html>
    	<head>
    		<meta charset="utf-8">
    		<title>Alta de productos</title>
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
            <!--link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet"-->
    	</head>
      <body>
        <div class="container-fluid contenedor">
         <header class="main-header">
           	<?php require_once('navbar2.php'); ?>
         </header>

        <div class="data_form">
          <h2 class="text-center ">Alta de productos</h2>
    		    <form  method="post" enctype="multipart/form-data">
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Nombre de Producto:</label>
                     <input type="text" class="form-control" name="prod_nombre" >
                     <span><?= ($prod_errores['prod_nombre'])??''?></span>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Codigo de Producto:</label>
                     <input type="text" class="form-control" name="prod_codigo" >
                     <span><?= ($prod_errores['prod_codigo'])??''?></span>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Genero :</label>
                     <select class="form-control" class="" name="prod_genero">
                      <option value="">Elegir genero :</option>
                        <?php foreach ($ay_genero  as $genero): ?>
                            <?php if ($genero == $genero ): ?>
                                <option selected value="<?=$genero?>"><?=$genero?></option>
                            <?php else: ?>
                                <option value="<?=$genero?>"><?=$genero?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_genero'])??''?></span>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Categoria :</label>
                     <select class="form-control" class="" name="prod_categoria">
                      <option value="">Elegir Categoria :</option>
                        <?php foreach ($ay_categoria  as  $categoria): ?>
                            <?php if ($categoria == $categoria ): ?>
                                <option selected value="<?=$categoria?>"><?=$categoria?></option>
                            <?php else: ?>
                                <option value="<?=$categoria?>"><?=$categoria?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_categoria'])??''?></span>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Tipo de Producto :</label>
                     <select class="form-control" class="" name="prod_tipo">
                      <option value="">Elegir tipo de Producto :</option>
                        <?php foreach ($ay_tipoproducto  as $tipoproducto): ?>
                            <?php if ($tipoproducto == $tipoproducto ): ?>
                                <option selected value="<?=$tipoproducto?>"><?=$tipoproducto?></option>
                            <?php else: ?>
                                <option value="<?=$tipoproducto?>"><?=$tipoproducto?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_tipo'])??''?></span>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Talla :</label>
                     <select class="form-control" class="" name="prod_talla">
                      <option value="">Elegir Talla :</option>
                        <?php foreach ($ay_tallas  as $talla ): ?>
                            <?php if ($talla == $talla ): ?>
                                <option selected value="<?=$talla?>"><?=$talla?></option>
                            <?php else: ?>
                                <option value="<?=$talla?>"><?=$talla?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_talla'])??''?></span>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Color:</label>
                       <input type="text" class="form-control" name="prod_color" value="">
                       <span><?= ($prod_errores['prod_color'])??''?></span>
                     </div>
                  </div>

                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label class="control-label">Es Destacado :</label>
                       <input type="checkbox" class="form-control checkbox" name="prod_destacado" >

                     </div>
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label for="prod_cantidad" class="control-label">Cantidad :</label>
                       <input type="number" class="form-control checkbox" name="prod_cantidad" >
                       <span><?= ($prod_errores['prod_cantidad'])??''?></span>
                     </div>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Precio:</label>
                       <input type="number" class="form-control" name="prod_precio" >
                       <span><?= ($prod_errores['prod_precio'])??''?></span>
                     </div>
                  </div>

                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Precio Lista:</label>
                     <input type="number" class="form-control" name="prod_precio_lista" >
                     <span><?= ($prod_errores['prod_precio_lista'])??''?></span>
                   </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prod_descripcion">Descripcion</label>
                        <textarea name="prod_descripcion" rows="3" cols="40"></textarea>
                        <span><?= ($prod_errores['prod_descripcion'])??''?></span>
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group ">
                      <label for="prod_foto" class="control-label">Subir imagenes:</label>
                      <input class="form-control" type="file" name="prod_foto" >
                  </div>
                </div>
              </div>
              <button class="text-center btn btn-primary" type="submit" name="prod_submit">Cargar producto</button>
              <a href="index.php" class="btn btn-outline-dark">Volver</a>
            </form>
    	    </div>
        </div>
        <?php require_once('footer.php'); ?>

    		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      </body>
    </html>
