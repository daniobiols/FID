<?php

require_once('funciones.php');

$name = '';
$email = '';
$pass = '';
$rpass = '';
$errores = [];

if ($_POST){
	if(isset($_POST['regBtn'])){
		$name = trim($_POST['nameReg']);
		$email = trim($_POST['emailReg']);
		$pass = trim($_POST['passReg']);
		$rpass = trim($_POST['rpassReg']);
		// echo "<pre>";
		// var_dump($_POST);

		$errores = validar($_POST);

		if (empty($errores)) {

			if (count($errores) == 0) {
				guardarUsuario($_POST);

				// header('location:registrado.php');
				// exit;
			}
		}
	}

	if(isset($_POST['logBtn'])){
		$email = trim($_POST['emailLog']);
		$pass = trim($_POST['passLog']);
		$errores = validarLogin($_POST);

		if (empty($errores)) {
			$usuario = existeMail($email);
			iniciar($usuario);
		}

		if (isset($_POST['recordarme'])) {
			setcookie('id', $usuario['id'], time() + 84600);
			estaLogueado();
		}
	}
}
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

				<!--Banner MOVILE-->
				<section class="banner-movile">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="./images/banner01.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="./images/banner02.jpg" alt="Second slide">
							</div>
						</div>
					</div>
				</section>

        <!--Carousel-->
        <section class="banner">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item">
												<video loop class="d-block w-100" autoplay muted plays-inline autoplay poster="posterimage.jpg" alt="First slide">
													<source src="./images/video.mp4" type="video/mp4">
												</video>
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" src="./images/banner01.jpg" alt="Second slide">
											</div>
                      <div class="carousel-item active">
                      	<img class="d-block w-100" src="./images/banner02.jpg" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
          </section>

      </header>

      <!--Cuerpo principal-->
      <section class="main-section">

				<!-- ------ACCESOS------ -->
	      <div class="container-boxes">
	        <div class="box">
	          <img class="box-img" src="./images/shop.jpg" alt="">
	          <ul class="box-items">
	            <li>SHOP</li>
							<li>ONLINE</li>
	          </ul>
	        </div>
	        <div class="box">
	          <img class="box-img" src="./images/tienda.jpeg" alt="">
	          <ul class="box-items">
	              <li>NUESTRAS</li>
								<li>TIENDAS</li>
	            </ul>
	        </div>
	        <div class="box">
	          <img class="box-img" src="./images/blog.jpeg" alt="">
	          <ul  class="box-items">
	              <li>BLOG</li>
	            </ul>
	        </div>
	      </div>


			<!-- Productos slider-->
			<div class="container-fluid">

			  <div class="row">
			    <div class="col-xs-12 col-sm-12 col-md-12">
			      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
			        <div class="carousel-inner">

			          <div class="item active">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <h4 class="text-center">Campera Cuero</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			            </div>
			          </div>

			          <!-- <div class="item">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <h4 class="text-center">Zapatillas Adidas</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			            </div>
			          </div>

			          <div class="item">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <span class="badge">10%</span>
			              <h4 class="text-center">Jean Levis</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			              <h6 class="text-center">5000,00 ARS</h6>
			            </div>
			          </div>

			          <div class="item">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <h4 class="text-center">Zapatillas Vans</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			            </div>
			          </div>

			          <div class="item">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <h4 class="text-center">Buzo DC</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			            </div>
			          </div>

			          <div class="item">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="#"><img src="./images/mujer01.jpg" class="img-responsive center-block"></a>
			              <h4 class="text-center">Remera Nike</h4>
			              <h5 class="text-center">4000,00 ARS</h5>
			            </div>
			          </div> -->

			        </div>

			        <!-- <div id="slider-control">
			        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="./images/left.png" alt="Left" class="img-responsive"></a>
			        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="./images/right.png" alt="Right" class="img-responsive"></a>
			      </div> -->
			      </div>
			    </div>
			  </div>
			</div>


        <!-- Productos mas Vendidos-->
        <!-- <h2 id="art_solic">Productos mas Vendidos</h2>
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
                    <img class="card-img-top" src="./images/hombre01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">u$s 43</h5>
                        <p class="card-text">Pantalon Milan</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/hombre02.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">u$s 21</h5>
                    <p class="card-text">Pantalon Berlin</p>
                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                </div>
            </div>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/hombre03.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">u$s 55</h5>
                        <p class="card-text">Camisa Buenos Aires</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/nino04.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">u$s 74</h5>
                        <p class="card-text">Gorra Buenos Aires</p>
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
        </div>
        <hr style="color: #0054b2;" /> -->

        <!--Categorias-->
        <div class="categorias">
            <h2 id="id_categorias">Categorias</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mujer</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><a href="productos.php#mujer">Camisas</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#mujer">Accesorios</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#mujer">Camperas</a></button>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hombre</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><a href="productos.php#hombre">Camperas</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#hombre">Camisas</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#hombre">Accesorios</a></button>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Niño</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><a href="productos.php#ninos">Camperas</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#ninos">Camisas</a></button>
                    <button class="dropdown-item" type="button"><a href="productos.php#ninos">Accesorios</a></button>
                </div>
            </div>
        </div>

      <hr style="color: #0054b2;" />

			<!--Pie de pagina-->
  		<?php require_once("footer.php") ?>

    </div>

		<!-- Required JavaScript Libraries -->
		<!-- <script src="../js/customjs"></script> -->
		<!-- Optional JavaScript -->
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
