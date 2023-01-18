<?php

  namespace App\Controllers;

use App\Controller;
use App\Container;
use App\Request;
use App\Session;
use App\Models\Llibre;
use App\Models\Update;
use App\Models\Prestec;
use App\Models\Usuari;
use App\Models\Model;

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

      if ($_SESSION["user"]->id == 0)
      {
        $this->redirect('/');
      }
      //primer obtenir dades
      $llibres=new Llibre();
      $cataleg=$llibres->findAll();   
     //$cataleg=$this->qb->select(['*'])->from('llibres')->exec()->fetch();
      return view('dashboard', ['cataleg'=>$cataleg,'user'=>$user]); 
    }
    
    public function profile()
    {
      if ($_SESSION["user"]->id == 0)
      {
        $this->redirect('/');
      }
      $user=Session::get('user');
      
      return view('header') .view('profile', ['user'=>$user]);
    }

    public function bookList()
    {
      if ($_SESSION["user"]->id == 0)
    {
      $this->redirect('/dashboard');
    }
    if ($_SESSION["user"]->rol_id == 2)
    {
      $this->redirect('/dashboard');
    }
      $user=Session::get('user');
      //primer obtenir dades
      $llibres=new Llibre();
      $cataleg=$llibres->findAll();    
      return view('booklist', ['cataleg'=>$cataleg,'user'=>$user]); 
    }
   function reserva(){
      // Recoger la id enviada por AJAX
      $user=Session::get('user');
      $id = $_POST['id'];
      $isbn = $_POST['isbn'];

      
      
      // Validar y limpiar la id antes de utilizarla
      $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
      $isbn = filter_var($isbn, FILTER_SANITIZE_NUMBER_INT);
      
      // Instanciar la clase correspondiente al modelo
      $model = new Llibre();
      
      
      //Asignar el id y los datos necesarios para actualizar
      $model->setId($id);
      $model->setData(array("disponible" => 0));
      $model->save();
      
      
      $Usuario_id = $_SESSION['user']->id;
      $Libro_isbn= $isbn;
      $data=[
        'Usuario_id'=>$Usuario_id,
        'Libro_isbn'=>$Libro_isbn];
      $prestec = new Prestec($data);
      $prestec->persist();
   }

   function devolver(){
    // Recoger la id enviada por AJAX
    $user=Session::get('user');
    $id = $_POST['id'];
    // Validar y limpiar la id antes de utilizarla
    $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    
    // Instanciar la clase correspondiente al modelo
    $model = new Llibre();
    //Asignar el id y los datos necesarios para actualizar
    $model->setId($id);
    $model->setData(array("disponible" => 1));
    $model->save();
    
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