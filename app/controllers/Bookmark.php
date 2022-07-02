<?php

  class Bookmark extends Controller {
    public function index()
    {
      if( !isset($_SESSION['login']) ) {
        header('Location: ' . BASEURL . '/login');
      }

      $data['title'] = 'Bookmark';

      $this->view('bookmark/index', $data);
    }
  }