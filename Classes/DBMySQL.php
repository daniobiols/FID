
<!-- <pre> -->

<?php

require_once("DB.php");

class DBMySQL extends DB
{
	protected $opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	protected $host    = 'mysql:host=127.0.0.1;dbname=FID;port=8889';
	protected $db_user = 'root';
	protected $db_pass = 'root';
	protected $columnas = '';
	protected $values = '';
	public $conn;

	public function __construct()
	{
		try {
			$this->conn = new PDO($this->host, $this->db_user, $this->db_pass, $this->opt);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}
	public function insert($datos, $model)
	{


		echo "<br>";
		echo "DBMysql - Datos tiene: ";
		echo "<br>";





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

			$sql = 'INSERT INTO '.$model->table.' ('.$columnas.') VALUES ('.$values.')';
			$query = $this->conn->prepare($sql);
			$query->execute();
			$db = null;
		} catch(\Exception $e) {
			var_dump($e);
			// ENTRO SOLO SI ERROR
			echo $e->getMessage();
		}
	}

	function searchEmail($email)
	{
			$query = $this->conexion->prepare("Select * from usuarios where email = :email");
			$query->bindValue(":email", $email);
			$query->execute();

			$usuarioFormatoArray = $query->fetch(PDO::FETCH_ASSOC);

			if ($usuarioFormatoArray) {
					$usuario = new Usuario($usuarioFormatoArray["email"], $usuarioFormatoArray["password"], $usuarioFormatoArray["id"]);
					return $usuario;
			} else {
					return null;
			}
	}

	public function loadAll()
	{
			//...
	}
}
// echo "</br>";
// echo '<br>Sigo ejecutando';
