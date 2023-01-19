<?php

namespace App\Models;

class Prestec extends Model{
  protected string $Usuario_id;
  protected string $Libro_isbn;

  public function __construct($data){
    parent::__construct($data);
    $this->Usuario_id = $data['Usuario_id'];
    $this->Libro_isbn = $data['Libro_isbn'];
    
  }
  public function setUsuarioId($Usuario_id){
    $this->Usuario_id = $Usuario_id;
    }
    
    public function getUsuarioId(){
    return $this->Usuario_id;
    }
    
    public function setLibroIsbn($Libro_isbn){
    $this->Libro_isbn = $Libro_isbn;
    }
    
    public function getLibroIsbn(){
    return $this->Libro_isbn;
  }
}