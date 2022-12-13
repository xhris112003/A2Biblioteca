<?php

  namespace App\Database;

  class Connection{
    public static function make($config){
      $dsn=$config['connection'].';dbname='.$config['dbname'];
    // var_dump($config);
     // die;
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