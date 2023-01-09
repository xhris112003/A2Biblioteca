<?php

  namespace App\Controllers;
  use App\Controller;
  use App\Request;
  use App\Session;
  use App\Container;
  use App\Models\Model;
  use App\Models\Usuari; 


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
      $email=$this->request->post('email');   
      $passwd=$this->request->post('password');
      //crida al metode privat d'autenticació
      $this->auth($email,$passwd);  
    }
    
    private function auth(string $email,string $passwd){
      //$password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
       $res=$this->qb->select(['*'])->from('usuaris')
        ->where(['email'=>$email])->limit(1)->exec()->fetch();
    
      if($res){
        $user=$res[0];
      
          //die($user->passwd);
          if (password_verify($passwd,$user->passwd)){
             Session::set('user',$user);
            //desar servei auth
            $this->redirect('/dashboard');
            }         
          }
      else{
          $this->session->set('error',"Sessión fallida");
          $this->redirect('/auth');
        }
      
     
    }
    
    function signup(){
      $email=$this->request->post('email');   
      $passwd=$this->request->post('passwd');
      $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
      $roles_id='2';
      $data=['email'=>$email,
        'passwd'=>$password,
        'roles_id'=>$roles_id];
        $user=new Usuari($data);
      //persist on DB
        if($user->persist()){
          $this->redirect('/');
        };
    }
    
    function logout(){
      $this->session->destroy();
      $this->redirect('/');
    }
    
  }