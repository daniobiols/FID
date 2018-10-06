<?php
require_once ('classes/DBJSON.php');
abstract class Model
{
  public $table;
  public $columns;
  public $datos;
  protected $db;
  public function __construct($datos=[])
  {
    // echo "Model - Datos tiene: ";
		// echo "<br>";
    // var_dump($datos);
    $this->datos = $datos;
    // $this->db = new DBJSON();
    $this->db = new DBMySQL();
  }
  public function save()
  {
    // if (!$this->getAttr('email')) {
    $this->insert();
    // } else {
    //   $this->update();
    // }
  }
  private function insert()
  {
    $this->db->insert($this->datos, $this);
  }
  public function getAttr($attr)
  {
    return isset($this->datos[$attr]) ? $this->datos[$attr] : null;
  }
  public function setAttr($attr, $value)
  {
    $this->datos[$attr] = $value;
  }
}
