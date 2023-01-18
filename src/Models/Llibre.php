<?php

  namespace App\Models;

  class Llibre extends Model{
    private string $isbn;
    private string $titulo;
    private string $resumen;
    private ? string $edicion;
    private string $formato;
    private string $imagen;
    private bool $disponible;
   
  // inserts
  public function setIsbn($isbn){
    $this->data['isbn']=$isbn;
  }
   public function setTitulo($titulo){
    $this->data['titulo']=$titulo;
  }
   public function setResumen($resumen){
    $this->data['resumen']=$resumen;
  }
   public function setEdicio($edicion){
    $this->data['edicion']=$edicion;
  }
  public function setFormato($formato){
    $this->data['formato']=$formato;
  }
  public function setImagen($imagen){
    $this->data['imagen']=$imagen;
  }
  public function setDisponible($disp){
    $this->data['disponible']=$disp;
  }

  //select
  public function getIsbn():string{
    return $this->data['isbn'];
  }
  public function getDisponible():bool{
    return $this->data['disponible'];
  }
    
  }