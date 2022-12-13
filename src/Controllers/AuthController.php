<?php

  namespace App\Controllers;
  use App\Controller;
  use App\Request;
  use App\Session;

  final class AuthController extends Controller{
    // $this->qb es el constructor de consultes
    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
    }

    public function index()
    {
      //mostrar form
      return view('auth');
     
    }
    function signin(){
      //capturar elements de POST
      $email=$this->request->post('username');   
      $passwd=$this->request->post('password');
      //crida al metode privat d'autenticació
      $this->auth($email,$passwd);  
    }
    
    private function auth(string $email,string $passwd){
      $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
       $result= $this->qb->select(['username','password'])->from('usuario')
        ->where(['email'=>$email])->limit(1)->exec()->fetch(); 
        if($result){
          $this->redirect('/dashboard');
        }else{
          $this->session->set('error',"Sessión fallida");
          $this->redirect('/auth');
        }
      
     
    }
    public function prueba()
    {
      echo "Prueba - HomeController";
      //render vista home
    }
    public function error(){
      echo "error";
    }
  }