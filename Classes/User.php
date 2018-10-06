
<?php

require_once('Model.php');

class User extends Model
{
  public $table = 'users';
  public $columns = ['name', 'email', 'password', 'type_users_id'];
}

$user = new User();

$user = $user->find(3);

var_dump($user);

?>
