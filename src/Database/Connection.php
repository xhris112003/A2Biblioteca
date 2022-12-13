<?php
namespace App\Database;

class Connection{
  
  public static function make($config){
    //establecer dsn que nos la da el archivo confi
    $dsn=$config['connection'].';dbname'.$config['dbname'];
    try{
      return new \PDO(
        $dsn,
        $config['dbuser'],
        $config['dbpassword'],
        $config['options']
      );
      }catch(\PDOException $e){
        die($e->getMessage());
      }
  }
}