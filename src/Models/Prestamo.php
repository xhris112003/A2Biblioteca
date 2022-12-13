<?php

namespace App;

class Prestamo{
  protected datetime $fechaInicio;
  protected datetime $fechaActual;

  //SETTER

public function setFechaInicio($fechainicio){
  $this->=$fechainicio;
}
  
public function setFechaActual($fechaActual){
  $this->=$fechaActual;
}
  //GETTER
public function getFechaInicio($fechaInicio){
return this->fechaInicio;
}

  public function getFechaActual($fechaActual){
return this->fechaActual;
}

}