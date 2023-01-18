<?php 

namespace App\Controllers;

use App\Models\Model;
use App\Controller;
use App\Request;
use App\Session;
use App\Container;
use App\Models\Usuari;
use App\Models\Llibre;


final class ListController extends Controller{
  function __construct(){
    
  }
  public function index(){
    if ($_SESSION["user"]->id == 0)
    {
      $this->redirect('/');
    }
    if ($_SESSION["user"]->rol_id == 2)
    {
      $this->redirect('/dashboard');
    }
    $model = new Model();
    $data= $model->getAll();
    return view('header') .view('list',$data);
   // return view();
  }
}