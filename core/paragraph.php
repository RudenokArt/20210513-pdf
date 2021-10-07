<?php 

header('Content-type: text/html; charset=utf-8');
include_once '../core/database.php';


class Paragraph 
{
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
      url=../admin/index.php?page=contract" />';   
    }
  }
}

Paragraph::add_new_paragraph();


?>