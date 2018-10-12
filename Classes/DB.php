<?php

abstract class DB
{
  public abstract function insert($datos, $model);
  public abstract function searchEmail($email);
  // public abstract function traeTodaLaBase();
  public abstract function traerInfo($entidad);
  public abstract function getUser($id, $table);
}

?>
