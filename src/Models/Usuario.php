<?php 
namespace App;

class Usuario{
 protected string $nombre;
 protected string $email;
 protected string $contrasena;

  //SETTERS
  
public function setNombre($nombre){
  $this->=$nombre;
}
  
public function setEmail($email){
  $this->=$email;
}
  
public function setContrasena($contrasena){
  $this->=$contrasena;
}

  //GETTERS
  public function getNombre($nombre){
    return $this->nombre;
  }

  public function getEmail($email){
return this->email;
}

  public function getContrasena($contrasena){
return this->contrasena;
}

}