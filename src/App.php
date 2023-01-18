<?php

namespace App;

use App\Request;
use App\Session;
use App\Container;
use App\ServiceProvider;

  final class App{
     protected Request $request;
     protected Session $session;
     protected Container $services;

    function __construct(){
      //iniciar sessió
      $this->session=new Session();
      //a partir del REQUEST obtindre controlador
      $this->request= new Request();
      $controller=$this->request->getController();
      $action=$this->request->getAction();
      $this->services=new Container(new ServiceProvider);
      //var_dump($controller);
      //var_dump($action);
      $this->dispatch($controller);
    }
    public function dispatch($controller){
      try{
        //comprovar si tenim el controlador
        $nameController='\\App\Controllers\\'.ucfirst($controller).'Controller';
        //die($nameController);
        $objContr=new $nameController($this->request,$this->session);
        //var_dump($objContr);
        $action=$this->request->getAction();
        
        if (method_exists($objContr,$action)){
          call_user_func([$objContr,$action]);
        }
        else{
          Session::set('error','OoopS!! no ho trobo!');
          call_user_func([$objContr,'error']);
        }
      }catch(\Exception $e){
        die($e->getMessage());
      }
    }
  }