<?php

namespace App;
use App\Database\QueryBuilder;

abstract class  Model {
  protected QueryBuilder $qb;
  protected string $table;
  //array de claus-valors
  protected array $data;
  protected int $id;

  public function __costruct(){
    $this->table=strtolower(get_class($this)).'s';
  }
  function save(){
    $this->qb->update($this->table,$data);
  }
  
  function new(){
    $this->qb->insert($this->data);
  }

  function remove(int $id){
    $this->qb->delete($id);
  }
  
}