<?php 

header('Content-type: text/html; charset=utf-8');
include_once '../core/database.php';



class Paragraph {

  public static function add_new_paragraph () {
    if (isset($_POST['add_new_paragraph'])) {
      $link = \Core\Database::db_connect();
      $sql = 'INSERT INTO `camp_paragraph`
      (`paragraph_type`, `paragraph_number`, `paragraph_text`) 
      VALUES (
      "'.$_POST['paragraph_type'].'",
      "'.$_POST['paragraph_number'].'",
      "'.$_POST['paragraph_text'].'")'; 
      mysqli_query($link, $sql);
      echo 'Запись добавлена в таблицу базы данных.';
      echo '<meta http-equiv="refresh" content="2; 
      url=../admin/index.php?page='.$_POST['paragraph_type'].'" />';   
    }
  }

  public static function get_list($paragraph_type) {
    $link = \Core\Database::db_connect();
    $arr = [];
    $sql_query = 'SELECT * FROM `camp_paragraph`  
    WHERE `paragraph_type`="'.$paragraph_type.'"
    ORDER BY `paragraph_number`';
    $sql = mysqli_query($link, $sql_query);
    while ($row = mysqli_fetch_assoc($sql)) {
      array_push($arr, $row);  
    }
    return $arr;
  }

  public static function get_paragraph ($id) {
    $link = \Core\Database::db_connect();
    $arr = [];
    $sql_query = 'SELECT * FROM `camp_paragraph`  
    WHERE `id`="'.$id.'"';
    $sql = mysqli_query($link, $sql_query);
    while ($row = mysqli_fetch_assoc($sql)) {
      $arr = $row;
    }
    return $arr;
  }

  public static function update_paragraph () {
    if (isset($_POST['update_paragraph'])) {
      $link = \Core\Database::db_connect();
      $sql = 'UPDATE `camp_paragraph`  SET 
      `paragraph_type`="'.$_POST['paragraph_type'].'",
      `paragraph_number`="'.$_POST['paragraph_number'].'",
      `paragraph_text`= "'.$_POST['paragraph_text'].'"
      WHERE `id`="'.$_POST['update_paragraph'].'"'; 
      mysqli_query($link, $sql);
      echo 'Запись таблицы базы данных обновлена.';
      echo '<meta http-equiv="refresh" content="2; 
      url=../admin/index.php?page='.$_POST['paragraph_type'].'" />';   
    }
  }

  public static function delete_paragraph () {
    if (isset($_POST['delete_paragraph'])) {
      $link = \Core\Database::db_connect();
      $sql = 'DELETE FROM `camp_paragraph` WHERE `id`="'.$_POST['delete_paragraph'].'"'; 
      mysqli_query($link, $sql);
      echo 'Запись таблицы базы данных удалена.';
      echo '<meta http-equiv="refresh" content="2; 
      url=../admin/index.php?page='.$_POST['paragraph_type'].'" />';   
    }
  }

}

Paragraph::add_new_paragraph();
Paragraph::update_paragraph();
Paragraph::delete_paragraph();


?>