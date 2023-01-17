<?php 

namespace App\Controllers;

use App\Models\Model;

final class ListController{
  function __construct(){
    
  }
  public function index(){
    $model = new Model();
    $data= $model->getAll();
    return view('header') .view('list',$data);
   // return view();
  }
}