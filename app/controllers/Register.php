<?php

  class Register extends Controller{
    public function index()
    {
      $data['title'] = 'Register';

      $this->view('register/index', $data);
    }

    public function user()
    {
      if( isset($_POST['register']) ) {
        if( $this->model('Register_model')->addDataUser($_POST) > 0 ) {
          Flasher::setFlash('berhasil', 'Registrasi', 'success');
          header('Location: ' . BASEURL . '/register');
          exit;
        } else {
          Flasher::setFlash('gagal', 'Registrasi', 'danger');
          header('Location: ' . BASEURL . '/register');
          exit;
        }
      }
    }
  }