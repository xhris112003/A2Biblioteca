<?php

namespace App\Models;

class Llibre{

  //si es nulo ponemos un interrogante
  // ej: private ? string $edicion;
  private string $isbn;
  private string $autor;
  private string $titulo;
  private string $edicion;
  private string $formato;
  private boolean $estado;

  // Setters
  public function setIsbn($isbn){
    $this->isbn=$isbn;
  }
 public function setAutor($autor){
    $this->autor=$autor;
  }
   public function setTitulo($titulo){
    $this->titulo=$titulo;
  }

  public function setEdicion($edicion){
    $this->edicion=$edicion;
  }

  public function setFormato($formato){
    $this->formato=$formato;
  }
   public function setEstado($estado){
    $this->estado=$estado;
  }

  //select

  public function getIsbn(){
    return $this->isbn;
  }

  public function getAutor(){
    return $this->autor;
  }

  public function getTitulo(){
    return $this->titulo;
  }

  public function getEdicion(){
    return $this->isbn;
  }
  public function getEdicion(){
    return $this->isbn;
  }
  public function getFormato(){
    return $this->formato;
  }
   public function getEstado(){
    return $this->estado;
  }
  

  
}