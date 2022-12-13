<?php

namespace App\Database;
class DB{
  protected \PDO $pdo;
  function __contruct($pdo){
     $this->pdo=$pdo;
  }
 
}