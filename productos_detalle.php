     <?php
      require_once('prod_funciones.php');
      $producto = traerPorProductID ($_GET['prod_id']);
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
          <h2 class="text-center ">Detalle de producto</h2>
    		    <form  method="post" enctype="multipart/form-data">
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Nombre de Producto:</label>
                     <input type="text" class="form-control" value=<?=$producto['prod_nombre']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Codigo de Producto:</label>
                     <input type="text" class="form-control" value=<?= $producto['prod_codigo']  ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Genero :</label>
                     <input type="text" class="form-control" value=<?= $producto['prod_genero']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Categoria:</label>
                     <input type="text" class="form-control" value=<?= $producto['prod_categoria']  ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Tipo de Producto :</label>
                     <input type="text" class="form-control" value=<?=$producto['prod_tipo']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Talla :</label>
                     <input type="text" class="form-control" value=<?= $producto['prod_talla'] ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Color:</label>
                       <input type="text" class="form-control" name="prod_color" value=<?= $producto['prod_color'] ?> readonly>
                     </div>
                  </div>
                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label class="control-label">Es Destacado :</label>
                       <input type="checkbox" class="form-control checkbox" value=<?= $producto["prod_destacado"] ?> readonly>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label for="prod_cantidad" class="control-label">Cantidad :</label>
                       <input type="number" class="form-control checkbox" value=<?= $producto["prod_cantidad"] ?> readonly>
                     </div>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Precio:</label>
                       <input type="number" class="form-control" name="prod_precio" value="<?=$producto['prod_precio']?>" readonly>
                     </div>
                  </div>

                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Precio Lista:</label>
                     <input type="number" class="form-control" name="prod_precio_lista" value="<?=$producto['prod_precio_lista']?>" readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prod_descripcion">Descripcion</label>
                        <textarea  readonly="true" name="prod_descripcion" rows="3" cols="40"  ><?= $producto['prod_descripcion'] ?>  </textarea >

                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group ">
                      <img class="form-control"  src=<?= $producto['prod_foto'] ?> alt="">
                  </div>
                </div>
              </div>
              <a href="productos.php" class="btn btn-outline-dark">Volver</a>
            </form>
    	    </div>
        </div>
        <?php require_once('footer.php'); ?>

    		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      </body>
    </html>
