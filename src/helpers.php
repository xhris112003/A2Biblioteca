<?php

function view($template, $data=[]){
  //coger los difetentes $DATA que hay// y lo pones en la plantilas
  //comprobamos si es array
  if(is_array($data)){
     extract($data,EXTR_OVERWRITE);
  }else{
    die("No Data");
  }
    
  return require "src/Views/{$template}.view.php";
 
}