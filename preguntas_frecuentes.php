<?php

require_once('funciones.php');

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

            <!--Cuerpo principal-->

				<div class="fuente-pr container-cuestionario">
					<div class="titulo-pr">
						<h1>PREGUNTAS FRECUENTES</h1>
					</div>
	        <a class="btn btn-primary btn-pr" data-toggle="collapse" href="#collapseProductos" role="button" aria-expanded="true" aria-controls="collapseProductos">
	          <h2>PRODUCTO</h2>
	        </a>
	        <div class="collapse show" id="collapseProductos">
	          <div class="card card-body">
	            <h3>¿COMO SE MIDEN LOS ZAPATOS? </h3>
	            <p>Nuestros zapatos se clasifican según las medidas estándar de los EE. UU., se mide en un dispositivo Brannock (esa cosa de metal frío que usaste para medir tu pie cuando estabas creciendo). Hay una buena probabilidad de que sepas el tamaño de tu zapato. Si no lo conoces, te sugerimos que midas tu pie en una de nuestras tiendas VANS más cercanas a ti. Ten en cuenta, por diseño, nuestros zapatos de skate de alto rendimiento tienden a encajar más apretado por lo que puede que desees seleccionar un tamaño medio más grande. </p>
	            <br>
	            <h3>¿CUÁL ES LA CONVERSIÓN DE TAMAÑO ENTRE ZAPATOS DE MUJERES Y HOMBRES? </h3>
	            <p>La conversión de talla de zapato de mujeres al de los hombres es de 1,5 hacia abajo. Por ejemplo, si usted fuera un tamaño 8 en mujer, que sería un tamaño de 6.5 en los hombres. Si caes por debajo de 6.5, se categorizaría dentro de "Niños". Recuerda, las tallas de "Niños" comienzan a partir de 3.5 a 6 y las tallas de hombres son de 6.5 a 13. </p>
	          </div>
	        </div>

	        <a class="btn btn-primary btn-pr" data-toggle="collapse" href="#collapseEnvios" role="button" aria-expanded="true" aria-controls="collapseEnvios"><h2>ENVÍOS</h2></a>
	        <div class="collapse show" id="collapseEnvios">
	          <div class="card card-body">
	            <h3>¿PUEDO REALIZAR PEDIDOS FUERA DEL TERRITORIO DE ARGENTINA? </h3>
	            <p>NO. Actualmente, todos los pedidos que se reciban en la página de Vans Colombia solo se pueden enviar a direcciones nacionales ubicadas al interior de los 32 departamentos que componen el territorio nacional. </p>
	            <br>
	            <h3>¿PUEDO ENVIAR MI PEDIDO A ALGUIEN MÁS?</h3>
	            <p>Si, los pedidos se pueden enviar a una dirección diferente a la de facturación. Después de que ingreses tu dirección de facturación en el registro de compra, tendrás la opción de ingresar una nueva dirección de envió.</p>
	            <br>
	            <h3>¿CUANTO TIEMPO SE DEMORA MI ORDEN EN LLEGAR?</h3>
	            <p>El tiempo de entrega estimado puede variar en un periodo máximo de 3 a 15 días hábiles a partir de la fecha en la que se aprueba la compra, estos tiempos incluyen alistamiento y proceso de distribución por parte de la empresa trasportadora y están sujetos a verificación por parte del cliente con el número de guía asignado a su pedido, así mismo www.vans.com.co no se hace responsable por retrasos en los tiempos de entrega ocasionados por eventos fortuitos, desastres naturales o de fuerza mayor.</p>
	            <br>
	            <h3>¿CUÁNDO PUEDO SABER SI MI ORDEN YA HA SIDO ENVIADA?</h3>
	            <p>Cuando un pedido sea enviado, el cliente recibirá un correo de confirmación con el número de guía para que pueda realizar rastreo a su orden, así mismo, podrá conocer el estado de su compra en la sección “MIS PEDIDOS”, ubicada en su perfil de usuario.</p>
	            <br>
	          </div>
	        </div>

	        <a class="btn btn-primary btn-pr" data-toggle="collapse" href="#collapsePagos" role="button" aria-expanded="true" aria-controls="collapsePagos"><h2>PAGOS</h2></a>
	        <div class="collapse show" id="collapsePagos">
	          <div class="card card-body">
	            <h3>¿QUE METODO DE PAGO SON ACEPTADOS?</h3>
	            <p>Aceptamos tarjetas de crédito Visa, MasterCard, American Express y Diners, tarjetas débito Visa y MasterCard, PSE, Pago referencia en Banco, puntos Baloto y Efecty.</p>
	            <br>
	            <h3>¿PUEDO USAR UNA TARJETA DEBITO?</h3>
	            <p>Si, las tarjetas débito Visa y MasterCard son aceptadas.</p>
	            <br>
	            <h3>¿CÓMO SE CALCULAN LOS IMPUESTOS?</h3>
	            <p>De acuerdo a lo estipulado por la ley, toda venta realizada en esta página debe contener un IVA “Impuesto de Valor Agregado”, cuya tasa es del 19% del total de la compra. Este impuesto se verá discriminado al momento de realizar el pago y de igual forma al recibir su factura de compra.</p>
	          </div>
	        </div>

	        <a class="btn btn-primary btn-pr" data-toggle="collapse" href="#collapseCuenta" role="button" aria-expanded="true" aria-controls="collapseCuenta"><h2>TU CUENTA</h2></a>
	        <div class="collapse show" id="collapse.showCuenta">
	          <div class="card card-body">
	            <h3>¿CÓMO ME REGISTRO?</h3>
	            <p>Si eres un cliente regular, da click en “INICIO SESION” localizado en la parte superior de la pantalla e ingresa tu email y contraseña. Si eres un cliente nuevo, da click en “INICIO SESION” e ingresa tus datos para crear una cuenta.</p>
	            <br>
	            <h3>¿CÓMO ACTUALIZO MI CUENTA Y DIRECCION?</h3>
	            <p>Puedes actualizar tu información al iniciar sesión en tu cuenta y dar click en “MI CUENTA” localizado en la parte superior de la pantalla.</p>
	            <br>
	            <h3>¿CÓMO PUEDO CAMBIAR MI CONTRASEÑA?</h3>
	            <p>Inicia sesión y da click en “MI CUENTA” localizado en la parte superior de la pantalla. Una vez te encuentres en la sección de “MI CUENTA”, podrás realizar cualquier cambio de información, incluyendo tu contraseña.</p>
	            <br>
	            <h3>¿CÓMO PUEDO RESTAURAR MI CONTRASEÑA?</h3>
	            <p>Puedes solicitar la restauración de tu contraseña desde aquí, o bien entrando en “INICIO SESION” localizado en la parte superior de la pantalla, y desde aquí en “HE OLVIDADO MI PASSWORD”. Esto abrirá una nueva ventana, donde te preguntara tu email. Ingresa tu email y te enviaremos una contraseña temporal. Sigue las instrucciones en el correo para iniciar sesión con esta contraseña temporal y como crear una nueva.</p>
	          </div>
	        </div>
	      </div>



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
