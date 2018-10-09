
<?php

require_once('Model.php');

class User extends Model
{
  public $table = 'users';
  public $columns = ['name', 'email', 'password', 'type_users_id'];

  // var_dump($columns);
  //
  // public function getPassword()
  // {
  //   return $this->password;
  // }

  // $user = new User();
  //
  // $user->save();
  //
  // $user = $user->find(3);


}
?>
