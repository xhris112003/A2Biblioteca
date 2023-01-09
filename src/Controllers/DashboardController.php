<?php

  namespace App\Controllers;

use App\Controller;
use App\Container;
use App\Request;
use App\Session;
use App\Models\Llibre;
use App\Models\Prestec;
use App\Models\Usuari;

  final class DashboardController extends Controller{
    protected Usuari $user;
    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
      $user=new Usuari(Session::get('usuario'));
      var_dump($user);
      die;
      $this->user=$user;
    }

    public function index()
    {
      $user=Session::get('usuario');
      //primer obtenir dades
      $llibres=new Llibre();
      $cataleg=$llibres->find(['disponible'=>true]);    
      return view('dashboard', ['cataleg'=>$cataleg,'usuario'=>$user]); 
    }
   function reserva(){
     $id=$this->request->getParams();
     $llibre=(new Llibre())->find(['id'=>$id])[0];
     return view('reserva',['llibre'=>$llibre,
                 'user'=>$this->user]);
   }
    
  function prestec(){
      //crear prèstec
       $id=$this->request->getParams();
       $llibre=(new Llibre())->find(['id'=>$id])[0];
       $prestec=new Prestec($this->user,$llibre);
       var_dump($prestec);
      die;
        
    }
    
    function prestecs(){
      echo "prestecs";
    }
  }