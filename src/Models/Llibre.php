<?php

  namespace App\Models;

  class Llibre extends Model{
    private string $isbn;
    private string $autor;
    private string $titol;
    private ? string $edicio;
  // inserts
    public function setIsbn($isbn){
      $this->isbn=$isbn;
    }
     public function setAuthor($autor){
      $this->autor=$autorm;
    }
     public function setTitol($titol){
      $this->titol=$titol;
    }
     public function setEdicio($edicio){
      $this->edicio=$edicio;
    }

    //select
    public function getIsbn():string{
      return $this->isbn;
    }
    //......
    
  }