     <?php
      // require_once('');
      require_once("Classes/Product.php");
      require_once("Classes/Category.php");
      require_once("Classes/SubCategory.php");
      require_once("Classes/Type.php");
      $categoria = new Category;
      $cat = $categoria->getAll();

      $subcategoria = new SubCategory;
      $subcat = $subcategoria->getAll();

      $Otype = new Type;
      $type = $Otype->getAll();

      // var_dump($_POST);
      var_dump($_FILES);

      $prod_errores=[];
      $nombreImagen=uniqid();

       if($_POST){

          $name = trim($_POST['prod_nombre']);
          $product_code = trim($_POST['prod_codigo']);
          $product_type =  trim($_POST['prod_tipo']);
      		$subcategories_id = trim($_POST['prod_subcategoria']);      //asignar
      		$categories_id = trim($_POST['prod_categoria']);
          $quantity=trim($_POST['prod_cantidad']);
          $color =trim($_POST['prod_color']);
          $description=trim($_POST['prod_descripcion']);
          $price=trim($_POST['prod_precio']);
          $price_list=trim($_POST['prod_precio_lista']);
          $size=trim($_POST['prod_talla']);

          $image='images/prod_img/'.$nombreImagen.'.'.pathinfo($_FILES['prod_foto']['name'],PATHINFO_EXTENSION);
          $product = new Product
          ( ['name'=>$name, 'product_code'=>$product_code,
            'product_type'=>$product_type, 'subcategories_id'=>$subcategories_id,
            'categories_id'=> $categories_id, 'quantity'=>$quantity,
            'color'=> $color , 'description'=> $description,
            'price'=> $price ,'price_list' => $price_list,
            'size' => $size, 'image'=> $image
          ] );
        // var_dump($product);
        // exit;
        // var_dump($product);
        // var_dump($product->guardarProdImagen($_FILES,$nombreImagen));
          $product->saveProduct();
          $product->guardarProdImagen($_FILES,$nombreImagen);

          // if (empty($prod_errores)) {
          //
    			// 	if (count($prod_errores) == 0)
          //   {
          //     new Product =
          //     (['name'=>$name, 'product_code'=>$product_code,
          //       'product_type'=>$product_type, 'subcategories_id'=>$subcategories_id,
          //       'categories_id'=> $categories_id, 'quantity'=>$quantity,
          //       'color'=> $color , 'description'=> $description,
          //       'price'=> $price ,'price_list' => $price_list,
          //       'size' => $size, 'image'=> $image
          //     ]);
          //
          //
          //
          //
          //
      		// 		guardarProducto($_POST,$_FILES,$nombreImagen) ;
          //     guardarProdImagen('prod_foto',$nombreImagen);
          //     //guardarProducto($_POST,$_FILES,$nombreImagen);
    			// 	}
    			// }

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
                     <label class="control-label">Categoria :</label>
                     <select class="form-control" class="" name="prod_categoria">
                      <option value="">Elegir Categoria :</option>
                        <?php foreach ($cat  as  $key ): ?>
                          <?php if ($key['name'] == $key['name'] ): ?>
                              <option selected value="<?=$key['id']?>"> <?=$key['name']?> </option>
                          <?php else: ?>
                              <option value="<?=$key['id']?>"><?=$key['name']?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_categoria'])??''?></span>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Sub Categoria :</label>
                     <select class="form-control" class="" name="prod_subcategoria">
                      <option value="">Elegir Sub_Categoria :</option>
                        <?php foreach ($subcat  as  $key ): ?>
                          <?php if ($key['name'] == $key['name'] ): ?>
                              <option selected value="<?=$key['id']?>"> <?=$key['name']?> </option>
                          <?php else: ?>
                              <option value="<?=$key['id']?>"><?=$key['name']?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_subcategoria'])??''?></span>
                   </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Tipo :</label>
                     <select class="form-control" class="" name="prod_tipo">
                      <option value="">Elegir tipo :</option>
                      <?php foreach ($type  as  $key ): ?>
                        <?php if ($key['name'] == $key['name'] ): ?>
                            <option selected value="<?=$key['id']?>"> <?=$key['name']?> </option>
                        <?php else: ?>
                            <option value="<?=$key['id']?>"><?=$key['name']?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </select>
                     <span><?= ($prod_errores['prod_tipo'])??''?></span>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="form-group ">
                     <label class="control-label">Talla :</label>
                     <input type="text" class="form-control" name="prod_talla" value="">
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
