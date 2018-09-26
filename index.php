<?php

require_once('funciones.php');
require_once('classes/DBJSON.php');
require_once('classes/DBMySQL.php');
require_once('classes/user.php');

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
		$rpass = trim($_POST['passReg']);

		if (empty($errores)) {
			if (count($errores) == 0) {
				$user = new User(['name'=>$name, 'email'=>$email, 'pass'=>$pass, 'user_type_id'=>1]);
				$SQL = new DBMySQL();
				// $DBJSON = new DBJSON ();
				$user->save();

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
				<!---ACCESOS----->
	      <div class="container-boxes">
	        <div class="box">
	          <a href="productos.php"><img class="box-img" src="./images/shop.jpg" alt=""> </a>
	        </div>
	        <div class="box">
	          <a href="productos.php"><img class="box-img" src="./images/tienda.jpg" alt=""></a>
	        </div>
	        <div class="box">
	          <a href="preguntas_frecuentes.php"><img class="box-img" src="./images/blog.jpg" alt=""></a>
	      	</div>
				</div>
		</section>

		<!--Pie de pagina-->
		<?php require_once("footer.php") ?>

	</div>

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
