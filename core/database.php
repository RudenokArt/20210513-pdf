<?php 

namespace Core;

class Database {

  public static function db_connect () {
    $host='localhost';
    $log='c931267p_db';
    $pas='c931267p_pas';
    $db='c931267p_db';
    $link=mysqli_connect($host,$log,$pas,$db);
    return $link;
  }


}



?>