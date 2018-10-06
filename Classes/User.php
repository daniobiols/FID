
<?php
require_once('classes/model.php');
class User extends Model
{
  public $table = 'Users';
  public $columns = ['name', 'email', 'pass', 'user_type_id'];
}
 ?>
