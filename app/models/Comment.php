<?php
  class Comment {
    private $db;
    
  
    public function __construct(){
      $this->db = new Database;
    }

    public function getComments(){
      $this->db->query("SELECT * FROM comments");

      return $this->db->resultSet();
    }


    public function getCommentByPostId($post_id)
    {
      $this->db->query('SELECT * FROM comments WHERE post_id = :post_id');
      $this->db->bind(':post_id', $post_id);

     
      $this->db->bind(':post_id', $post_id);
      $results = $this->db->resultSet();

      return $results;
    }
    public function addComment($data)
    {
        $this->db->query('INSERT INTO comments (post_id,  comm_author, comm_content) VALUES(:post_id , :comm_author , :comm_content)');
        // Bind values
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':comm_author', $data['comm_author']);
        $this->db->bind(':comm_content', $data['comm_content']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

  
