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
      //$user=new Usuari(Session::get('user'));
      //$this->user=$user;
    }

    public function index()
    {
      $user=Session::get('user');
      //primer obtenir dades
      $llibres=new Llibre();
      $cataleg=$llibres->findAll();    
     //$cataleg=$this->qb->select(['*'])->from('llibres')->exec()->fetch();
      return view('dashboard', ['cataleg'=>$cataleg,'user'=>$user]); 
    }
    
    public function profile()
    {
      $user=Session::get('user');
      
      return view('header') .view('profile', ['user'=>$user]);
    }

    public function bookList()
    {
      $user=Session::get('user');
      //primer obtenir dades
      $llibres=new Llibre();
      $cataleg=$llibres->findAll();    
      return view('booklist', ['cataleg'=>$cataleg,'user'=>$user]); 
    }
   function reserva(){
     $user=Session::get('user');
     $id=$this->request->getParams();  
     $llibre=(new Llibre())->find(['id'=>$id])[0];
    var_dump($llibre);
                                                                
     return view('dashboard',['llibre'=>$llibre,
     'user'=>$user]);
   }
    
  function prestec(){
      //crear prèstec
    $llibres=new Llibre();
    $cataleg=$llibres->findAll(); 
    $id=$cataleg[0]->id;
    $llibre=new Llibre();
    $book=$llibre->find(['id'=>$id]);  
     $data=(array)$book;
     $llibre->setData($data);
     $llibre->setDisponible(false);
     $prestec=new Prestec($this->user, $llibre);
     $prestec->save();
      
        
    }
    
    function prestecs(){
      echo "prestecs";
    }
  }