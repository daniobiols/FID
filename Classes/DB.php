<?php
    require_once("User.php");

    abstract class DB
    {
      public abstract function guardarUsuario(Usuario $user);
      public abstract function buscamePorEmail($email);
      public abstract function traeTodaLaBase();
    }
