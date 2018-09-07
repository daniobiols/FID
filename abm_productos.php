    <?php
      require_once('prod_funciones.php');
      // $prod_name='';
      $prod_errores=[];

       if($_POST){
//          var_dump($_POST );
// //         if(isset($_POST['prod_submit'])){
          $prod_nombre = trim($_POST['prod_nombre']);
      		$prod_descripcion=trim($_POST['prod_descripcion']);
      		// $prod_talla = trim($_POST['prod_talla']);
      		$prod_categoria = trim($_POST['prod_categoria']);
          $prod_subcategoria= trim($_POST['prod_subcategoria']);
          $prod_precio=trim($_POST['prod_precio']);
          $prod_precio_lista=trim($_POST['prod_precio_lista']);
      		$prod_color= trim($_POST['prod_color']);

          $prod_errores=validarProducto($_POST,$_FILES);
          if (empty($prod_errores)) {

    				if (count($prod_errores) == 0) {
    					guardarProducto($_POST,$_FILES);

    					// header('location:registrado.php');
    					// exit;
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
         </header>

        <div class="data_form">
          <h2 class="text-center">Alta de productos</h2>
    		   <form  method="post" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prod_nombre">Nombre de producto:</label>
                                    <input class="form-control" type="text" name="prod_nombre" value="">
                                    <span>
                                      <?= ($prod_errores['prod_nombre'])??''?>
                                    </span>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="prod_categoria">Categoria</label>
                                  <select class="" name="prod_categoria">
                                    <option value=""></option>
                                    <option value="hombre">Hombre</option>
                                    <option value="nino">Niño</option>
                                    <option value="mujer">Mujer</option>
                                  </select>
                                  <span>
                                    <?= ($prod_errores['prod_categoria'])??''?>
                                  </span>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prod_subcategoria">Subcategoria :</label>
                                    <input class="form-control" type="text" name="prod_subcategoria" value="">
                                    <span>
                                      <?= ($prod_errores['prod_subcategoria'])??'' ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prod_color"> Color:</label>
                                    <input class="form-control" type="text" name="prod_color" value="">
                                    <span>
                                      <?= ($prod_errores['prod_color'])??''  ?>
                                    </span>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prod_precio">Precio :</label>
                                    <input class="form-control" type="number" name="prod_precio" value="">
                                    <span>
                                      <?= ($prod_errores['prod_precio'])??''?>
                                    </span>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prod_precio_lista"> Precio de Lista:</label>
                                    <input class="form-control" type="number" name="prod_precio_lista" value="">
                                    <span>
                                      <?= ($prod_errores['prod_precio_lista'])??''?>
                                    </span>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="prod_descripcion">Descripcion</label>
                                    <textarea name="prod_descripcion" rows="8" cols="80"></textarea>

                                </div>
                            </div>
                    </div>
                    <div class="col-xs-6">
                                <div class="form-group ">
                                    <label for="prod_foto" class="control-label">Subir imagenes:</label>
                                    <input class="form-control" type="file" name="prod_foto" >
                                </div>
                    </div>
                    <button class="text-center" type="submit" name="prod_submit">Cargar producto</button>
              </form>
    	    </div>
        </div>

    		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      </body>
    </html>
