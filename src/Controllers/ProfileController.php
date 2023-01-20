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


final class ProfileController extends Controller{
    function __construct(Request $request,Session $session){
        parent::__construct($request,$session);
        //$user=new Usuari(Session::get('user'));
        //$this->user=$user;
    }

    public function index()
    {
      if ($_SESSION["user"]->id == 0)
      {
        $this->redirect('/');
      }
      $user=Session::get('user');
      
      $prestec=$this->qb->select(['*'])->from('prestecs')->exec()->fetch();   
      
      return view('header') .view('profile', ['prestec'=>$prestec,'user'=>$user]);
    }
}