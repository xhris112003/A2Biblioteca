<?php

  namespace App;

  class ServiceProvider {
      public function register(ServiceContainer $container) {
          $container->set('config', 'Config');
          $container->set('db', 'DatabaseService');
          
      }
  }
  