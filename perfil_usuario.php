<?php
<<<<<<< HEAD
=======
//NO VA MAS--require_once('funciones.php');


include_once('Classes/Model.php');
include_once('Classes/Loader.php');
require_once('Classes/User.php');
require_once('Classes/DBMySQL.php');

 //$usuario = traeTodaLaBase($_SESSION['id']);



?>

>>>>>>> 4f8107332af44b0ef9299f0c9e384e34b3519e82

include_once('classes/Model.php');
include_once('classes/Loader.php');
require_once('classes/User.php');
require_once('classes/DBMySQL.php');
 // $usuario = traeTodaLaBase($_SESSION['id']);
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
			<!--Cuerpo principal-->
      <section class="main-section">

            <div class="contenerdor_formulario_usuario">
                <h2 class="fuente_formulario_usuario" id="id_contacto">MI CUENTA</h2>
                <form class="formulario_usuario">
										<div class="form-group">
											<label class="fuente_formulario_usuario" for="exampleFormControlInput1">EMAIL</label>
											<input type="text" class="form-control" value="<?=$usuario["email"]?>" id="Email">
										</div>
                    <div class="form-group">
                        <label class="fuente_formulario_usuario" for="exampleFormControlInput1">NOMBRE</label>
                        <input type="text" class="form-control" value="<?=$User['name']?>" id="Name">
                    </div>
										<div class="form-group">
                        <label class="fuente_formulario_usuario" for="exampleFormControlInput1">APELLIDO</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" value="<?=$user['lastname']?>" id="Name">
=======
                        <input type="text" class="form-control" value="<?=$usuario['lastname']?>" id="Name">
>>>>>>> 4f8107332af44b0ef9299f0c9e384e34b3519e82
                    </div>
                    <div class="form-group">
                        <label class="fuente_formulario_usuario" for="exampleFormControlInput1">TELEFONO</label>
                        <input type="tel" class="form-control" id="Phone">
                    </div>
                    <div class="form-group">
                        <label class="fuente_formulario_usuario" for="exampleFormControlInput1">DIRECCIÓN</label>
                        <input type="tel" class="form-control" id="Phone">
                    </div>
                    <div class="form-group">
                        <label class="fuente_formulario_usuario" for="exampleFormControlTextarea1">avatar</label>
                        <input type="file" class="form-control" id="avatar" >
                    </div>
<<<<<<< HEAD
                    <button type="submit" class="btn btn-ttc">Send</button>
										<button type="submit" class="btn btn-ttc">Actualizar Datos</button>
=======
                    <button type="button" class="btn btn-ttc">Send</button>
										<button type="button" class="btn btn-ttc">Actualizar Datos</button>
>>>>>>> 4f8107332af44b0ef9299f0c9e384e34b3519e82
                </form>
            <hr style="color: #0054b2;" />
            </div>
				</section>

		<hr style="color: #0054b2;" />

		<!--Pie de pagina-->
		<?php require_once("footer.php") ?>








		<!-- Required JavaScript Libraries -->
		<!-- <script src="../js/customjs"></script> -->
		<!-- Optional JavaScript -->
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>s -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
