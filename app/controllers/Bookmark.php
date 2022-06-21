<?php

  class Bookmark extends Controller {
    public function index()
    {
      $data['title'] = 'Bookmark';

      $this->view('bookmark/index', $data);
    }
  }