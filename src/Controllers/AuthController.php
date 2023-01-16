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
      return view('home');
     
    }
    function signin(){
      //capturar elements de POST
      $username=$this->request->post('username');   
      $passwd=$this->request->post('passwd');
      //crida al metode privat d'autenticació
      $this->auth($username,$passwd);  
    }
    
    private function auth(string $username,string $passwd){
      //$password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
       $res=$this->qb->select(['*'])->from('usuaris')
        ->where(['username'=>$username])->limit(1)->exec()->fetch();
      

      if($res){
        $user=$res[0];
      
          //var_dump($passwd,$user->passwd);
          //die();
          if (password_verify($passwd,$user->passwd)){
              Session::set('user',$user);
            
              $this->redirect('/dashboard');
            }else{
              $this->session->set('error',"Sessión fallida");
              $this->redirect('/home');
            }     
          }
      
      
     
    }
    
    function signup(){
      $email=$this->request->post('email');   
      $passwd=$this->request->post('passwd');
      $username=$this->request->post('username');
      $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
      $rol_id='2';
      $data=['email'=>$email,
        'username'=>$username,
        'passwd'=>$password,
        'rol_id'=>$rol_id];
      $user=new Usuari($data);
      //persist on DB
      
        if($user->persist()){
          $this->redirect('/');
        };
    }

    function registerAdmin(){
      $username=$this->request->post('username'); 
      $email=$this->request->post('email');   
      $passwd=$this->request->post('passwd');
      $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
      $rol_id='2';
      $data=['username'=>$username,
        'email'=>$email,
        'passwd'=>$password,
        'rol_id'=>$rol_id];
      
      $user=new Usuari($data);
      //persist on DB
    
        if($user->persist()){
          $this->redirect('/list');
        };
    }
    
    function logout(){
      $this->session->destroy();
      $this->redirect('/');
    }
    
  }