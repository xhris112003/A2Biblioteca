<?php 

namespace App\Controllers;

final class HomeController{
  function __construct(){
    
  }
  //Se contruye el controlador en funcion de la ruta que nos den.
  //los metodos hacen generar vistas -> View
  public function index(){
    $titol="DAW";
   //primer obtenir dades
   
    return view('header') .view('home');
   // return view();
  }

  public function error(){
    echo "error";
  }
}