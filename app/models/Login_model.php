<?php

  class Login_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function user($username, $password)
    {

      $query = 'SELECT * FROM ' . $this->table . ' WHERE username = :username AND password = :password';

      $this->db->query($query);
      $this->db->bind('username', $username);
      $this->db->bind('password', $password);

      return $this->db->resultSet();
    }
  }