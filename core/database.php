<?php 

namespace Core;

class Database {

  public static function db_connect () {
    $host='localhost';
    $log='k99522g2_db';
    $pas='k99522g2_pas';
    $db='k99522g2_db';
    $link=mysqli_connect($host,$log,$pas,$db);
    return $link;
  }


}



?>