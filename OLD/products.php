<pre>
<?php
require_once('prod_funciones.php');

$productos = traerTodosProductos();
var_dump($productos);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Products</title>
  <meta charset="utf-">
  <title>FID</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
  <link rel="shortcut icon" href="images/icono.ico">
</head>
  <body>
    <!-- main content products -->
    <div class="container-fluid">
      <div class="col-md-8">
        <h2 class="text-center">Productos</h2>
        <div class="row">
          <?php foreach ($productos as $producto) { ?>
            <div class="col-md-3">
              <h4><?= $producto['prod_nombre']?></h4>
              <img src="images/hombre01.jpg" alt="Levis Jeans" class="img-thumb"/>
              <p class="list-price text-danger">Precio de lista : <s>$24.99</s> </p>
              <p class="precio">Precio :  $ 19.99</p>
              <button type="button" class="btn btn-sm btn-sucess" data-toggle="modal" data-target="#details-<?=$producto['prod_id']?>">details</button>
            </div>
          <?php } ?>




        </div>
      </div>
    </div>
    <!-- details modal -->
    <div class="modal fade details-1" id="details-<?=$producto['prod_id']?>" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">Levis Jeans1212 </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="center-block">
                    <img src="images/hombre01.jpg" alt="Levis Jeans" class="details img-responsive">
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4 class="">Details</h4>
                  <p> descripcion del producto Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <hr>
                  <p>Precio : $ 40.90 </p>
                  <p>Brand : Levis </p>
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="col-xs-3">
                        <label for="cantidad">cantidad</label>
                        <input type="text" class="form-control" id="cantidad"name="cantidad">
                      </div>
                      <div class="col-xs-9">
                      </div>
                      <br><br>
                      <p>disponible :4 </p>
                    </div>
                    <div class="form-group">
                      <label for="talle"></label>
                      <select class="talle" id="talle" class="form-control">
                        <option value=""></option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit">
              <span class="glyphicon glyphicon-shopping-cart"></span>Agregar a carrito</button>
            <button class="btn btn-default" data-dismiss="modal">Cerrar</button>

          </div>
        </div>


      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
