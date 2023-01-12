<?php

  namespace App\Models;
  use App\Models\Model;
  use App\Models\Prestec;

  class Usuari extends Model{
    protected string $nom;
    protected string $email;
    protected string $password;
    
    public function __construct(){
      parent::__construct();
    } 
    public function prestecs(){
      return $this->hasMany(Prestec::class);
    }
  }