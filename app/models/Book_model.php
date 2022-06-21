<?php

  class Book_model {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getAllBook()
    {
      $this->db->query('SELECT b.id_book, c.category, b.title, b.writer, b.publisher, b.publication_year, b.description
        FROM category c INNER JOIN book b
        USING (id_category)
      ');
      return $this->db->resultSet();
    }

    public function getBookById($id)
    {
      $this->db->query('SELECT b.id_book, c.category, b.title, b.writer, b.publisher, b.publication_year, b.description
        FROM category c INNER JOIN book b
        USING (id_category)
        WHERE id_book = :id
      ');
      $this->db->bind('id', $id);
      return $this->db->single();
    }
  }