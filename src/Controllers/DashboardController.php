<?php

  namespace App\Controllers;

use App\Controller;
use App\Request;
use App\Session;
  final class DashboardController extends Controller{
    
    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
    }

    public function index()
    {
      //primer obtenir dades
     $cataleg=$this->qb->select(['*'])->from('libro')->exec();
      return view('dashboard');
      //render vista home
    }
   
    
    public function error(){
      echo "error";
    }
  }