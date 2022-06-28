<?php

  class Dashboard extends Controller{
    public function index()
    {
      if( !isset($_SESSION['login']) ) {
        header('Location: ' . BASEURL . '/login');
      }

      $data['title'] = 'Dashboard';

      $this->view('dashboard/index', $data);
    }

    public function bookmark()
    {
      $data['title'] = 'Bookmark';

      $this->view('dashboard/bookmark', $data);
    }
  }