<?php

//Bootstrap requiere de fichero configuración
//Utiliza todas las variables de entorno
// \ --> clase standar que esta fuera de la carpeta SRC
//creación de la clase:
//$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
//cargamos la estructura para poder leer las v.ent
//$dotenv->load();

//estas dos linias de arriba serán necesarias si el proyecto esta fuera de replit.

use App\Container;
use App\Database\DB;
use App\Database\Connection;
//conectar un servicio con el contenedor
//Container::bind('config', require'config.php');
//acces a servicio database
 //Container::bind('database', new DB(Connection::make(
  //Container::get('config.php'))));

