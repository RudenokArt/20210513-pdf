<?php 

namespace Core;
header('Content-type: text/html; charset=utf-8');
include_once '../core/database.php';
// spl_autoload_register(function($class) {
//   $filename = str_replace('Core', '../Core', $class) . '.php';
//   require($filename);
// });

class Dates{

  public static function get_list () {
   $link = \Core\Database::db_connect();
   $sql=mysqli_query($link,'SELECT * FROM `camp_dates` ');
   $arr=[];
   while ($row = mysqli_fetch_assoc($sql))    {
    array_push($arr, $row);  }
    return $arr;
  }

  public static function get_item ($item_id) {
    $link = \Core\Database::db_connect();
    $sql=mysqli_query($link,'SELECT * FROM `camp_dates` WHERE `id`="'.$item_id.'"');
    while ($row = mysqli_fetch_assoc($sql))    {
      $item = $row;  
    }
    return $item;
  }

  public static function check_season ($season) { // проверить сезон на наличие туров
    $flag = false;
    $arr = self::get_list();
    foreach ($arr as $key => $value) {
      if ($value['season'] == $season) {
        $flag = true;
      }
    }
    return $flag;
  }

  public static function add_new_date () {
    if (isset($_POST['add_new_date'])) {
      $link = \Core\Database::db_connect();
      $sql = 'INSERT INTO `camp_dates`( `date_from`, `date_to`, `season`, `camp`)
      VALUES ("'.$_POST['date_from'].'","'.$_POST['date_to'].'",
      "'.$_POST['season'].'","'.$_POST['camp'].'")';
      mysqli_query($link, $sql);
      echo 'Запись добавлена в таблицу базы данных.';
      echo '<meta http-equiv="refresh" content="2; url=../admin/index.php" />';
    }
  }

  public static function date_delete() {
    if (isset($_POST['date_delete'])) {
      $link = \Core\Database::db_connect();
      $sql = 'DELETE FROM `camp_dates` WHERE `id`="'.$_POST['date_delete'].'"';
      mysqli_query($link, $sql);
      echo 'Запись удалена из таблицы базы данных.';
      echo '<meta http-equiv="refresh" content="2; url=../admin/index.php" />';
    }
  }
  public static function date_update() {
    if (isset($_POST['date_update'])) {
      $link = \Core\Database::db_connect();
      $sql = 'UPDATE `camp_dates` 
      SET 
      `date_from`="'.$_POST['date_from'].'",
      `date_to`="'.$_POST['date_to'].'",
      `season`="'.$_POST['season'].'",
      `camp`="'.$_POST['camp'].'" 
      WHERE `id`="'.$_POST['date_update'].'"';
      mysqli_query($link, $sql);
      echo 'Запись таблицы базы данных изменена.';
      echo '<meta http-equiv="refresh" content="2; url=../admin/index.php" />';
    }
  }

}

Dates::add_new_date();
Dates::date_delete();
Dates::date_update();




?>