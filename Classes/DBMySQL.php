
<!-- <pre> -->

<?php
class DBMySQL extends DB
{
	public function insert($datos, $model)
	{
		$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
		$host    = 'mysql:host=127.0.0.1;dbname=FID;port=8889';
		$db_user = 'root';
		$db_pass = 'root';
		$columnas = '';
		$values = '';

		foreach ($datos as $key => $value)
		{
			if (in_array($key, $model->columns))
			{
				$columnas .= $key . ',';
				$values .= '"' . $value . '",';
			}
		}
		$columnas = trim($columnas, ',');
		$values = trim($values, ',');

		try {
			$db = new PDO($host, $db_user, $db_pass, $opt);
			$sql = 'INSERT INTO '.$model->table.' ('.$columnas.') VALUES ('.$values.')';
			$query = $db->prepare($sql);
			$query->execute();
			$db = null;
		} catch(\Exception $e) {
			var_dump($e);
			// ENTRO SOLO SI ERROR
			echo $e->getMessage();
		}
	}
	public function searchEmail($email)
	{
		// $opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
		// $host    = 'mysql:host=127.0.0.1;dbname=FID;port=8889';
		// $db_user = 'root';
		// $db_pass = 'root';
		// $columnas = '';
		// $values = '';
		// foreach ($datos as $key => $value)
		// {
		// 	if (in_array($key, $model->columns))
		// 	{
		// 		$columnas .= $key . ',';
		// 		$values .= '"' . $value . '",';
		// 	}
		// }
		// $columnas = trim($columnas, ',');
		// $values = trim($values, ',');
		// try {
		// 	$db = new PDO($host, $db_user, $db_pass, $opt);
		// 	$sql = 'SELECT ('.$values.')' FROM '.$model->table.' ('.$columnas.');
		// 	$query = $db->prepare($sql);
		// 	$query->execute();
		// 	$db = null;
		// } catch(\Exception $e) {
		// 	var_dump($e);
		// 	// ENTRO SOLO SI ERROR
		// 	echo $e->getMessage();
		// }
	}
	public function loadAll()
	{
			//...
	}
}
// echo "</br>";
// echo '<br>Sigo ejecutando';
