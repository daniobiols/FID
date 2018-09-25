<?php

    abstract class DB
    {
      public abstract function insert($datos, $model);
      public abstract function searchEmail($email);
      public abstract function loadAll();
    }
