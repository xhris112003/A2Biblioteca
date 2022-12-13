<?php

  namespace App;
  use App\Container;
  use App\Database\QueryBuilder;
  use App\Request;
  use App\Session;

  abstract class Controller{
    protected Request $request;
    protected Session $session;
    protected QueryBuilder $qb;
    
    public function __construct(Request $request,Session $session){
      $this->qb=Container::get('query');
      $this->request=$request;
      $this->session=$session;
    }
    public function redirect(string $url){
      header('Location:'.$url);
    }
  }