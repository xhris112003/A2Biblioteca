<?php

  namespace App\Controllers;
use App\Controller;
use App\Request;
use App\Session;

  final class RegisterController extends Controller{
    
    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
    }

    public function index()
    {
      //primer obtenir dades
    
      return view('register');
      //render vista home
    }
   
   
  }