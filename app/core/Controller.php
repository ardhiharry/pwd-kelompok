<?php

  class Controller {
    public function view($view, $data = [])
    {

      if( isset($_SESSION['login']) ) {
        require_once '../app/core/Template_inheritance.php';
        require_once '../app/views/' . $view . '.php';
      } else {
        require_once '../app/core/Template_inheritance.php';

        if( $data['title'] == 'Home' ) {
          require_once '../app/views/home/index.php';
        } elseif( $data['title'] == 'Login' ) {
          require_once '../app/views/login/index.php';
        } elseif( $data['title'] == 'Register' ) {
          require_once '../app/views/register/index.php';
        }
        
        require_once '../app/views/partials/navbar.php';
        require_once '../app/views/layouts/main.php';
      }

    }

    public function model($model)
    {
      require_once '../app/models/' . $model . '.php';
      return new $model;
    }
  }