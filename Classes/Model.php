<?php

require_once('DBMySQL.php');

abstract class Model
{
  public $table;
  public $columns;
  public $datos;
  protected $db;
  public function __construct($datos=[])
  {
    $this->datos = $datos;
    $this->db = new DBMySQL();
  }
  public function save()
  {
    if (!$this->getAttr('email')) {
    $this->insert();
    } else {
      // $this->update();
    }
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

  public function find($id)
  {
    $sql = 'select * from '.$this->table.' where id = :id'; //fecth
    $stmt = $this->db->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
