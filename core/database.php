<?php 

namespace Core;

class Database {

  public static function db_connect () {
    $host='localhost';
    $log='o918458x_db';
    $pas='o918458x_pas';
    $db='o918458x_db';
    $link=mysqli_connect($host,$log,$pas,$db);
    return $link;
  }


}



?>