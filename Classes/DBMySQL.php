
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
		foreach ($datos as $key => $value)
		{
			if (in_array($key, $model->columns))
			{
				$this->columnas .= $key . ',';
				$this->values .= '"' . $value . '",';
				// var_dump($values);
			}
		}
		$this->columnas = trim($this->columnas, ',');
		$this->values = trim($this->values, ',');
		try {
			$sql = 'INSERT INTO '.$model->table.' ('.$this->columnas.') VALUES ('.$this->values.')';
			$query = $this->conn->prepare($sql);
			$query->execute();
			$db = null;
		} catch(\Exception $e) {
			var_dump($e);
			echo $e->getMessage();
		}
	}
	function searchEmail($email)
	{
		$query = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
		$query->bindValue(":email", $email);
		$query->execute();
		$usuarioFormatoArray = $query->fetch(PDO::FETCH_ASSOC);
		if ($usuarioFormatoArray)
		{
			$usuario = new User([$usuarioFormatoArray["email"]]);
			// $usuario = new User($usuarioFormatoArray["email"], $usuarioFormatoArray["password"], $usuarioFormatoArray["id"]);
			// $usuario = [$usuarioFormatoArray["email"]]);

			return $usuario;
		} else {
			return null;
		}
	}
	function getPassword($email)
	{
		$query = $this->conn->prepare("SELECT * FROM users WHERE email = '$email'");
		$query->execute();
		$usuarioFormatoArray = $query->fetch(PDO::FETCH_ASSOC);
		if ($usuarioFormatoArray)
		{
			$usuario = new User($usuarioFormatoArray["password"]);
			return $usuario;
		} else {
			return null;
		}
	}
	public function traeTodaLaBase()
	{
		$query = $this->conexion->prepare("SELECT * FROM usuarios");
		$query->execute();
		$usuariosFormatoArray = $query->fetchAll(PDO::FETCH_ASSOC);
		//Esta variable va a traer todos los usuarios en formato array, pero queremos objetos...
		$usuariosFormatoClase = [];
		//asi que armamos nuestro array de usuarios EN FORMATO DE CLASE y lo "foreacheamos" (?)
		foreach ($usuariosFormatoArray as $usuario):
				//array DE OBJETOS del tipo Usuario, nada mas y nada menos. Como se procesan despues, es responsabilidad de otra clase.
				$usuariosFormatoClase[] = new Usuario($usuario["email"], $usuario["password"], $usuario["id"]);
		endforeach;
		return $usuariosFormatoClase;
		//Aclaro de nuevo, el array que devuelve este metodo es un ARRAY DE OBJETOS.
	}
	//ACTUALIZAR PERFIL DEL USUARIO
	public function UpdateUser($datos, $model)
	{
		foreach(datos as $key => $value)
		{
			 if (in_array($key, $model->columns))
			{
				$this->columnas .= $key . ',';
				$this->values .= '"' . $value . '",';
			}
	 	}
		$this->columnas = trim($this->columnas, ',');
		$this->values = trim($this->values, ',');
		try {
			$sql = 'UPDATE '.$model->table.' SET ('.$this->columnas.') = ('.$this->values.')';
			$query = $this->conn->prepare($sql);
			$query->execute();
			$db = null;
				}
				catch(\Exception $e)
				{
					var_dump($e);
					echo $e->getMessage();
		}
	}
}
