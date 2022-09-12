<?php 

namespace Core;

class Database {

  public static function db_connect () {
    $host='localhost';
    $log='root';
    $pas='root';
    $db='pdf-pladas';
    $link=mysqli_connect($host,$log,$pas,$db);
    return $link;
  }


}



?>