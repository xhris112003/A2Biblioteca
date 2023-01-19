<?php

namespace App\Models;
use App\Database\QueryBuilder;
use App\Container;

class  Model {
  protected QueryBuilder $qb;
  protected string $table;
  //array de claus-valors
  protected array $data;
  protected array $props;
  protected array $condition;
  protected int $id;

  public function __construct(array $data=null){
    //nom taula associada i constructor de consultes
    $reflect = new \ReflectionClass($this);
    $this->table=strtolower($reflect->getShortName()).'s';
    $this->qb=Container::get('query');
    $this->qb->setTable($this->table);
    $reflect=new \ReflectionClass($this);
    
    $ownProps = array_filter($reflect->getProperties(), function($property) {
    return $property->getName(); 
});  

    $this->props=$ownProps;
    if($data){
       $this->data=$data;  
    }
  }
  public function getId() {
    return $this->id;
  }
  public function getData() {
    return $this->data;
  }
  public function setData($data) {
    $this->data = $data;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function get():array{
    return $this->data;
  }
  
  
  function save(){
    $this->qb->update($this->table,$this->data,$this->id);
  }
  
  function persist(){
      if($this->data){
       try{
        $this->qb->insert($this->data)->exec();
        return true;
      }catch(\Exception $e){
         return false;
      }  
    }
  }
    
  function getAll(){
    $items= $this->qb->select(['*'])->from('usuaris')->exec()->fetch();
    
    return $items;
  }
  function find($condition){
    $k=array_keys($condition);
    $v=array_values($condition);
    $items= $this->qb->select(['*'])->from($this->table)->where([$k[0]=>$v[0]])->exec()->fetch();
    return $items;
    
    //$this->qb->setStmt($this->qb->query($this->qb->getQuery()));
    //return $this->qb->exec()->fetch()[0];
    
  }
  function findAll(){
    $items= $this->qb->select(['*'])->from($this->table)->exec()->fetch();
    return $items;
    //$this->qb->setStmt($this->qb->query($this->qb->getQuery()));
    //return $this->qb->exec()->fetch()[0];
    
  }
  public function delete(int $id) {
    $this->qb->remove("prestecs", $id);
  }

  
  // de l'objecte actual, extreu la pertinença 
  //user_id
  function belongsTo(Obj $obj){
    return $obj;
  }

  // de l'objecte actual, extreu la pertinença 
  //user_id

  function hasMany(Obj $obj,string $foreign_field){
    $table2=strtolower((new \ReflectionClass($obj))->getShortName()).'s';
    $sql="SELECT * FROM {$this->table} t1 INNER JOIN {$table2} t2 ON t1.id={$table2}.{$foreign_field}";
    $this->qb->query[]=$sql;
    if($this->conditions){
        $this->qb->query->where();
    }
    $rows=$this->qb->query->exec()->fetch();
    return $rows;
  }
}