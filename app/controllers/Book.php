<?php

  class Book extends Controller {
    public function index()
    {
      $data['title'] = 'Books';
      $data['book'] = $this->model('Book_model')->getAllBook();
      
      $this->view('book/index', $data);
    }

    public function detail()
    {
      echo json_encode($this->model('Book_model')->getBookById($_POST['id']));
    }
  }