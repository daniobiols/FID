     <?php
      require_once('Classes/Product.php');
      require_once('Classes/Category.php');
      require_once('Classes/SubCategory.php');
      require_once('Classes/Type.php');
      
      $prod = new Product;
      $producto =  $prod->find($_GET['id']);

      $cat = New Category;
      $categoria = $cat->find($producto['categories_id']);

      $subcat = New SubCategory;
      $subcategoria = $subcat->find($producto['subcategories_id']);

      $tipo = New Type;
      $type = $tipo->find($producto['product_type']);

      var_dump($categoria);
      var_dump($subcategoria);
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
                     <input type="text" class="form-control" value=<?=$producto['name']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Codigo de Producto:</label>
                     <input type="text" class="form-control" value=<?= $producto['product_code']  ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Tipo :</label>
                     <input type="text" class="form-control" value=<?= $type['name']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Categoria:</label>
                     <input type="text" class="form-control" value=<?= $categoria['name']  ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Subcategoria :</label>
                     <input type="text" class="form-control" value=<?=$subcategoria['name']  ?> readonly>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Talla :</label>
                     <input type="text" class="form-control" value=<?= $producto['size'] ?> readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Color:</label>
                       <input type="text" class="form-control" name="color" value=<?= $producto['color'] ?> readonly>
                     </div>
                  </div>
                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label class="control-label">Es Destacado :</label>
                       <input type="checkbox" class="form-control checkbox" value=<?= $producto["is_popular"] ?> readonly>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group ">
                     <div class="">
                       <label for="prod_cantidad" class="control-label">Cantidad :</label>
                       <input type="number" class="form-control checkbox" value=<?= $producto["quantity"] ?> readonly>
                     </div>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group ">
                       <label class="control-label">Precio:</label>
                       <input type="number" class="form-control" name="prod_precio" value="<?=$producto['price']?>" readonly>
                     </div>
                  </div>

                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Precio Lista:</label>
                     <input type="number" class="form-control" name="prod_precio_lista" value="<?=$producto['price_list']?>" readonly>
                   </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prod_descripcion">Descripcion</label>
                        <textarea  readonly="true" name="prod_descripcion" rows="3" cols="40"  ><?= $producto['description'] ?>  </textarea >

                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group ">
                      <img class="form-control"  src=<?= $producto['image'] ?> alt="">
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
