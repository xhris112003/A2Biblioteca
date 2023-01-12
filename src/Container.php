<?php

  namespace App;
  use App\Session;
  final class Container{

    public static $services=[];
    public function __construct(){
     
    }    

    public static function  bind($key,$value){
      if (self::search($key)){
         throw new Exception('Just bounded yet');
      }else{
         self::$services[$key]=$value;
          Session::set('services',self::$services);
      }
     
  
    }
    
    
    public static function search($key){
      if(in_array($key,self::$services)){
        return true;
      }
      return false;
     
    }
    public static function get($key){
      if(!array_key_exists($key,self::$services)){
        throw new \Exception("No {$key} is bound in container");
      }
      return self::$services[$key];
    }
 }