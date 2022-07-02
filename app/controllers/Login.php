<?php

  class Login extends Controller{
    public function index()
    {
      $data['title'] = 'Login';

      $this->view('login/index', $data);
    }

    public function userLogin()
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $data['login'] = $this->model('Login_model')->user($username, $password);

      if( $data['login'] == null ) {
        header('Location: ' . BASEURL . '/login');
      } else {
        foreach( $data['login'] as $data ) {
          $_SESSION['login'] = $data['username'];
          var_dump($data);
          header('Location: ' . BASEURL);
        }
      }
    }

    public function userLogout()
    {
      unset($_SESSION['login']);
      session_destroy();
      header('Location: ' . BASEURL);
    }
  }