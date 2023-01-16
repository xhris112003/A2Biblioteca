<?php

  namespace App\Models;
  use App\Models\Model;
  use App\Models\Prestec;

  class Usuari extends Model{
    protected string $username;
    protected string $email;
    protected string $passwd;
    protected string $rol_id;
    
    public function __construct($data){
      parent::__construct($data);
      $this->username = $data['username'];
      $this->email = $data['email'];
      $this->passwd = $data['passwd'];
      $this->rol_id = $data['rol_id'];
      
    } 
    public function prestecs(){
      return $this->hasMany(Prestec::class);
    }
  }