<?php

  class Book_Lists extends Controller {
    public function index()
    {
      if( !isset($_SESSION['login']) ) {
        header('Location: ' . BASEURL . '/login');
      }

      $data['title'] = 'Book Lists';
      $data['category'] = $this->model('Book_model')->getAllBook();
      
      $this->view('book_lists/index', $data);
    }

    public function post()
    {
      if( !isset($_SESSION['login']) ) {
        header('Location: ' . BASEURL . '/login');
      }

      $data['title'] = 'Book Post';
      $data['category'] = $this->model('Book_Lists_model')->getCategory();
      
      $this->view('book_lists/post', $data);
    }

    public function bookPost()
    {
      if( isset($_POST['post']) ) {
        if( $this->model('Book_lists_model')->bookData($_POST) > 0 ) {
          Flasher::setFlash('berhasil ditambahkan', 'Buku', 'success');
          header('Location: ' . BASEURL . '/book_lists');
          exit;
        } else {
          Flasher::setFlash('gagal ditambahkan', 'Buku', 'danger');
          header('Location: ' . BASEURL . '/book_lists');
          exit;
        }
      }
    }
  }