<?php

  class Book_lists_model {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getCategory()
    {
      $this->db->query('SELECT * FROM category');
      return $this->db->resultSet();
    }

    public function uploadPicture()
    {
      $fileName = $_FILES['picture']['name'];
      $fileSize = $_FILES['picture']['size'];
      $fileError = $_FILES['picture']['error'];
      $tmpName = $_FILES['picture']['tmp_name'];

      // cek upload gambar
      if( $fileError === 4 ) {
        Flasher::setFlash('gambar terlebih dahulu', 'upload', 'warning');
        return false;
      }

      // cek yg diupload adalah gambar
      $validPicExtensions = ['jpg','jpeg', 'png'];
      $picExtension = explode('.', $fileName);
      $picExtension = strtolower(end($picExtension));
      if( !in_array($picExtension, $validPicExtensions) ) {
        Flasher::setFlash('bukan gambar', 'file', 'warning');
        return false;
      }

      // cek ukuran maksimum gambar
      if( $fileSize > 2097152 ) {
        Flasher::setFlash('gambar terlalu besar', 'ukuran', 'warning');
        echo "
          <script>
            alert('ukuran gambar terlalu besar');
          </script>
        ";
        return false;
      }

      // generate nama file
      $NewFileName = uniqid();
      $NewFileName .= '.';
      $NewFileName .= $picExtension;

      // memindahkankan gambar ke directory
      move_uploaded_file($tmpName, 'img/' . $NewFileName);
      return $NewFileName;
    }

    public function bookData($data)
    {
      $title = htmlspecialchars($data['title']);
      $writer = htmlspecialchars($data['writer']);
      $publisher = htmlspecialchars($data['publisher']);
      $publication_year = htmlspecialchars($data['publication_year']);
      $category = htmlspecialchars($data['id_category']);
      $description = htmlspecialchars($data['description']);

      // Upload Picture
      $picture = $this->uploadPicture();
      if( !$picture ) {
        return false;
      }

      $query = "INSERT INTO book VALUES
        ('', :id_category, :title, :writer, :publisher, :publication_year, :description, :picture)
      ";

      $this->db->query($query);
      $this->db->bind('title', $title);
      $this->db->bind('writer', $writer);
      $this->db->bind('publisher', $publisher);
      $this->db->bind('publication_year', $publication_year);
      $this->db->bind('id_category', $category);
      $this->db->bind('description', $description);
      $this->db->bind('picture', $picture);

      $this->db->execute();

      return $this->db->rowCount();
    }
  }