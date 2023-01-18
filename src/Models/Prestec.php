<?php

namespace App\Models;

class Prestec extends Model{
  protected string $Usuario_id;
  protected string $Libro_isbn;
  protected string $fechaInicio;

  public function __construct($data){
    parent::__construct($data);
    $this->Usuario_id = $data['Usuario_id'];
    $this->Libro_isbn = $data['Libro_isbn'];
    
  } 
}