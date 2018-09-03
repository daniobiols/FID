<?php

require_once('funciones.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-">
		<title>FID-COMMERCE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
        <!--link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet"-->
	</head>
	<body>
        <!--Contenedor-->
        <div class="container-fluid contenedor">
            <!--Cabecera-->
            <header class="main-header">

                <?php require_once('navbar2.php'); ?>

           <!--Cuerpo principal-->
            <section class="main-section">
                <!-- <h2>Listado de Productos</h2>
                <hr style="color: #0054b2;"/> -->
								<!--
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item active" aria-current="page">Coleccion</li>
								  </ol>
								</nav>

								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item"><a href="#">Coleccion</a></li>
								    <li class="breadcrumb-item active" aria-current="page">Hombre</li>
								  </ol>
								</nav> -->

								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item"><a href="#">Home</a></li>
								    <li class="breadcrumb-item"><a href="#">Mujeres</a></li>
								    <li class="breadcrumb-item active" aria-current="page">Indumentaria</li>
								  </ol>
								</nav>
                <article id="mujer">
                    <!-- <h2>Mujer</h2> -->
                    <div class="row articulos">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 20</h5>
                                    <p class="card-text">Campera Otawa</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer02.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 123</h5>
                                    <p class="card-text">Campera Lima</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer03.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 432</h5>
                                    <p class="card-text">Remera Roma</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer04.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 43</h5>
                                    <p class="card-text">Pantalon Milan</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer05.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">u$s 21</h5>
                                <p class="card-text">Pantalon Berlin</p>
                                <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                            </div>
                        </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/mujer06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 55</h5>
                                    <p class="card-text">Camisa Buenos Aires</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article id="hombre">
                    <h2>Hombre</h2>
                    <div class="row articulos">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 74</h5>
                                    <p class="card-text">Gorra Buenos Aires</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre02.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre03.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre04.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/hombre02.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article id="ninos">
                    <h2>Niños</h2>
                    <div class="row articulos">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino03.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 74</h5>
                                    <p class="card-text">Gorra Buenos Aires</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino04.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino05.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino03.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="./images/nino04.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">u$s 24</h5>
                                    <p class="card-text">Cartera Nevada</p>
                                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

             <!--Pie de pagina-->
						 <?php require_once("footer.php") ?>
        </div>













































		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
