<?php
  class Post {
    private $db;
    
      public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query("SELECT * FROM posts");
     
      $results = $this->db->resultSet();

      return $results;
    }

    public function getPostById($post_id){
      $this->db->query("SELECT * FROM posts WHERE post_id = :post_id");
      $this->db->bind(':post_id', $post_id);

      $row = $this->db->single();

      return $row;
    }


    public function countPosts() {
      $this->db->query('SELECT * FROM posts');
           
        $this->db->resultSet();
           
        $results = $this->db->rowCount();
           
        return $results;
     }


     public function addPost($data) {
      $this->db->query("INSERT INTO posts (title, chapter, date) VALUES(:title, :chapter, :date) ORDER BY date DESC" );
      // Bind values
  
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':date', $data['date']);
      $this->db->bind(':chapter', $data['chapter']);
    
     // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
     }
    }

    public function updatePost($data) {
      $this->db->query('UPDATE posts SET title = :title, date = :date, chapter = :chapter WHERE post_id = :post_id');
      // Bind values
      $this->db->bind(':post_id', $data['post_id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':date', $data['date']);
      $this->db->bind(':chapter', $data['chapter']);
    
       // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
       }
    }
    
    public function deletePost($post_id) {
      $this->db->query('DELETE FROM posts WHERE post_id = :post_id');
    
     // Bind Values
      $this->db->bind(':post_id', $post_id);
    
     //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    
  }