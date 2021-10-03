<?php 

namespace Core;

class Dates{
  public static function get_list () {
    return 'get_list1';
  }
  public static function add_new_camp () {
    if (isset($_POST['add_new_camp'])) {
      print_r($_POST);
      echo '<meta http-equiv="refresh" content="2; url=../admin/index.php" />';
    }
  }
}

Dates::add_new_camp();




?>