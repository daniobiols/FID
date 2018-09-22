<?php

abstract class Model
{

  protected $db;

  function __construct(argument)
  {
    // code...
  }

  public function save($data, $table)
  {
    $sql = "INSERT INTO $table()";
    foreach ($data as $colum => $value) {
      $sql .= "$colum, ";
    }
    $sql .= ") VALUES (";

    foreach ($data as $colum => $value) {
      $sql .= "$colum, ";
    }
  }

  public function delete()
  {

  }

  public function modificar()
  {

  }

}
 ?>
