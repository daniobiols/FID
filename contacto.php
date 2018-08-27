<?php require_once('funciones.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-">
		<title>FID-COMMERCE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
        <!--link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet"-->
	</head>
	<body>
        <!--Contenedor-->
        <div class="container-fluid contenedor">
            <!--Cabecera-->
            <?php require_once('navbar.php'); ?>

            <!--Cuerpo principal-->
            <div class="contacto">
                <h2 id="id_contacto">Comunicate con nosotros.</h2>
                <form class="formulario">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Address</label>
                        <input type="email" class="form-control" id="Email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="tel" class="form-control" id="Phone" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="Message" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-ttc">Send</button>
                </form>
            <hr style="color: #0054b2;" />
            </div>
        </section>

          <!--Pie de pagina-->
					<?php require_once("footer.php") ?>
        </div>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+945DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi4jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha34-ZMP7rVo3mIykV+2+9J3UJ44jBk0WLaUAdn49aCwoqbBJiSnjAK/lWvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha34-o+RDsa0aLu++PJvFqyfFScvbHFLtbvScbAjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
