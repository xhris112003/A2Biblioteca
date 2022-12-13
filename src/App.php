<?php

namespace App;
use App\Request;

final Class App{
protected $request;

  function __construct(){
    //iniciar sessión
    //a partir del REQUEST obtindre controlador 
    $this->request= new Request();

    //Llamo a getController que est dentro de request
    $controller=$this->request->getController();
    $action=$this->request->getAction();

    //Si existe el controlador
    $this->dispatch($controller);
  }

  public function dispatch($controller){
  try{
    //comprovamos si tenemos controlador
    $nameController='\\App\Controllers\\'.ucfirst($controller).'Controller';
    $objContr = new $nameController;
    $action=$this->request->getAction();
    
    //existe un método 
        if(method_exists($objContr,$action)){
          call_user_func([$objContr,$action]);
        }else{
          call_user_func([$objContr, 'error']);
        }
    
  }catch(\Excepction $e){
    die($e->getMessage());
    }
  }
}  