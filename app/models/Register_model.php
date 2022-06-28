<?php

  $_SESSION['user'] = 'guest';
  
  class Register_model {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function addDataUser($data)
    {
      $username = strtolower(stripslashes($data['username']));
      $email = $data['email'];
      $password = $data['password'];

      // encrypt password
      // $password = password_hash($password, PASSWORD_BCRYPT);

      $query = "INSERT INTO user VALUES (
        '', :username, :email, :password
      )";

      $this->db->query($query);
      $this->db->bind('username', $username);
      $this->db->bind('email', $email);
      $this->db->bind('password', $password);

      $this->db->execute();

      return $this->db->rowCount();
    }
  }