<?php

namespace App\Models;

class Autor{
  protected string $nombre;
  //SETTER
    public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  
  //GETTER
  public function getNombre(){
    return $this->nombre;
  }
}

