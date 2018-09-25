<?php

require_once('classes/model.php');

class User extends Model

{
  public $table = 'User';
  public $columns = ['name', 'email', 'pass'];
}

 ?>
