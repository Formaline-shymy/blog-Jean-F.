<?php
  class Comment {
    private $db;
    
  
    public function __construct(){
      $this->db = new Database;
    }

    public function getComments(){
      $this->db->query("SELECT * FROM comments
                        INNER JOIN posts
                        ON comments.post_id = posts.post_id");
  
      $results = $this->db->resultSet();

      return $results;
    }


    public function getCommentById($comm_id)
    {
        $this->db->query('SELECT * FROM comments WHERE comm_id = :comm_id');
        $this->db->bind(':comm_id', $comm_id);

        $row = $this->db->single();

        return $row;
    }


    public function getCommentsByPostId($post_id){
      $this->db->query("SELECT * FROM comments WHERE post_id = :post_id");
      $this->db->bind(":post_id", $post_id);
      
      $results = $this->db->resultSet();

      return $results;
    }


    public function addComment($data){

        $this->db->query('INSERT INTO comments (post_id, author, content) VALUES(:post_id , :author , :content)');
        // Bind values
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':content', $data['content']);
       

       // Execute
       if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
    }

    
    
    public function countComments() {
      $this->db->query('SELECT * FROM comments');
    
      $this->db->resultSet();
    
      $results = $this->db->rowCount();
    
      return $results;
     }

     public function deleteComment($post_id) {
      $this->db->query('DELETE FROM comments WHERE post_id = :post_id');
    
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

  
