<?php
  class Post {
    private $db;
    
  
    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query("SELECT * FROM posts");

      return $this->db->resultSet();
    }


    public function getPostById($post_id)
    {
      $this->db->query('SELECT * FROM posts WHERE post_id = :post_id');
      $this->db->bind(':post_id', $post_id);

      if ($row = $this->db->single()){;
      return $row;
    }
    else {
      // ID does not exist
       die("Désole mais aucun chapitre ne correspond à l'identifiant $post_id");    
    }
  }

  }