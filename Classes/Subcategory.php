<?php
require_once('Model.php');

class SubCategory extends Model
{
  public $table = 'subcategories';
  public $columns = ['name','categories_id'];
}
 ?>
