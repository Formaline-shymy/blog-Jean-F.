<?php
class AdminPost {
    private $db;
  
  
    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query("SELECT * FROM posts");

      $results = $this->db->resultSet();

      return $results;
    }

    public function addPost($data) {
      $this->db->query('INSERT INTO posts (post_title, post_date post_content) VALUES(:post_title, :post_date, :post_content)');
      // Bind values
      $this->db->bind(':post_title', $data['post_title']);
      $this->db->bind(':post_date', $data['post_date']);
      $this->db->bind(':post_content', $data['post_content']);
    
     // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
     }
    }
   
    public function getPostById($post_id) {
     $this->db->query('SELECT * FROM posts WHERE post_id = :post_id');
     $this->db->bind(':post_id', $post_id);
   
     $row = $this->db->single();
   
     return $row;
    }
   
    public function editPost($data) {
     $this->db->query('UPDATE posts SET post_title = :post_title, post_content = :post_content WHERE post_id = :post_id');
     // Bind values
     $this->db->bind(':post_id', $data['post_id']);
     $this->db->bind(':post_title', $data['post_title']);
     $this->db->bind(':post_content', $data['post_content']);
   
     // Execute
     if ($this->db->execute()) {
      return true;
     } else {
      return false;
     }
    }
   
    
    public function countPosts() {
     $this->db->query('SELECT * FROM posts');
   
     $this->db->resultSet();
   
     $results = $this->db->rowCount();
   
     return $results;
    }
   
    
    public function deletePost($post_id)
    {
     // Prepare Query
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

