<?php

// require_once('prod_funciones.php');
// require_once('funciones.php');

// $productos= traerTodosProductos();
?>

<!DOCTYPE html>
<html>
	<head>

		<title>FID</title>

		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- Style CSS -->
		<link rel="stylesheet" href="css/styles.css">

		<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

		<!-- Icono TAB -->
		<link rel="shortcut icon" href="images/icono.ico">
	</head>

	<body>
        <!--Contenedor-->
    <div class="container-fluid contenedor">
      <!--Cabecera-->
      <header class="main-header">

        <!--Menu navbar-->
				<?php require_once('navbar2.php'); ?>
			</header>



            <section class="main-section">
								<form class="" action="productos_detalle.php" method="get">


                <article id="Hombre">
                    <!-- <h2>Mujer</h2> -->
                    <div class="row articulos">
											<?php foreach ($productos as  $producto) {?>
												<?php if ($producto['prod_genero']=='Hombre'): ?>

                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?= $producto['prod_foto'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> $/. <?= $producto['prod_precio'] ?></h5>
                                    <p class="card-text"> <?= $producto['prod_nombre'] ?></p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
																		<a href="productos_detalle.php?prod_id=<?=$producto['prod_id']  ?>" class="btn btn-outline-dark">Detalle</a>
                                </div>
                            </div>
                        </div>
												<?php endif; ?>
											<?php } ?>
										</div>
								</article>
								<article id="Mujer">
										<!-- <h2>Mujer</h2> -->
										<div class="row articulos">
											<?php foreach ($productos as  $producto) :?>
												<?php if ($producto['prod_genero']=='Mujer'): ?>

												<div class="shadow p-3 mb-5 bg-white rounded">
														<div class="card" style="width: 18rem;">
																<img class="card-img-top" src="<?= $producto['prod_foto'] ?>" alt="Card image cap">
																<div class="card-body">
																		<h5 class="card-title"> $/. <?= $producto['prod_precio'] ?></h5>
																		<p class="card-text"> <?= $producto['prod_nombre'] ?></p>
																		<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
																		<a href="productos_detalle.php?prod_id=<?=$producto['prod_id']  ?>" class="btn btn-outline-dark">Detalle</a>
																</div>
														</div>
												</div>
												<?php endif; ?>
											<?php endforeach ?>
										</div>
								</article>
								<article id="Niñe">
										<!-- <h2>Mujer</h2> -->
										<div class="row articulos">
											<?php foreach ($productos as  $producto) {?>
												<?php if ($producto['prod_genero']=='Niñe'): ?>

												<div class="shadow p-3 mb-5 bg-white rounded">
														<div class="card" style="width: 18rem;">
																<img class="card-img-top" src="<?= $producto['prod_foto'] ?>" alt="Card image cap">
																<div class="card-body">
																		<h5 class="card-title"> $/. <?= $producto['prod_precio'] ?></h5>
																		<p class="card-text"> <?= $producto['prod_nombre'] ?></p>
																		<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
																		<a href="productos_detalle.php?prod_id=<?=$producto['prod_id']  ?>" class="btn btn-outline-dark">Detalle</a>
																</div>
														</div>
												</div>
												<?php endif; ?>
											<?php } ?>
										</div>
								</article>
								</form>
            </section>
						<hr style="color: #0054b2;" />

						<!--Pie de pagina-->
			  		<?php require_once("footer.php") ?>

			    </div>
				</body>
			</html>
