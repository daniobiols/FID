<pre>

<?php

$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=FID;port=8889';
$db_user = 'root';
$db_pass = 'root';


try
{
	// Primero obtengo la conexion al server
	$db = new PDO($host, $db_user, $db_pass, $opt);

	$query = $db->query('SELECT * FROM users');
	echo 'Usuarios';
	echo '<ul>';
	foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
		echo "<li>{$key}: {$value['nombre']}</li>" ;
	}
	echo '</ul>';

}

catch(\Exception $e)
{
	var_dump($e);
	// ENTRO SOLO SI ERROR
	echo $e->getMessage();
}

// echo "</br>";
// echo '<br>Sigo ejecutando';
