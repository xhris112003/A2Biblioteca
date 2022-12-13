<?php

namespace App;

//registre de serveis

final class Container{
  //Array de Servicios que tenemos registrados
  protected static $services=[];
  //para hacer esta conexion necesitamos función blind -->
  //Static podemos hacerder con operador::
  //Cada vez que hacemos un bind, lo añadimos a nuesto array
  public static function bind($key, $value){
    self::$services[$key]=$value;
  }
  //funcion para extraer
  public function get($key){
    //si no existe en nuestro array
    if(!array_key_exists($key, self::$services)){
      throw new Exception("No {$key} is bound in container");
    }//si existe -->
    return self::$services[$key];
  }

  
}