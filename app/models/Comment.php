<?php
  class Comment {
    private $db;
    
  
    public function __construct(){
      $this->db = new Database;
    }
// transmition in admin panel
    public function getComments(){
      $this->db->query("SELECT * FROM comments
                        INNER JOIN posts
                        ON comments.post_id = posts.post_id
                        ORDER BY comments.flag DESC, comments.date_comm DESC");
  
      $results = $this->db->resultSet();

      return $results;
    }


    public function getCommentsByPostId($post_id){
      $this->db->query("SELECT * FROM comments WHERE post_id = :post_id");
      $this->db->bind(":post_id", $post_id);
      
      $results = $this->db->resultSet();

      return $results;
    }


    public function addComment($data){

        $this->db->query('INSERT INTO comments (post_id, author, content) VALUES(:post_id , :author , :content) ORDER BY date_comm ASC');
        // Bind values
        
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':author',  $data['author'] );
        $this->db->bind(':content', $data['content']);
     
       // Execute
       if ($this->db->execute()) {
        return true;
       } else {
        return false;
        }
    }
  
    public function countComments() {
      $this->db->query('SELECT *  FROM comments');
           
      $this->db->resultSet();
         
      $results = $this->db->rowCount();
         
      return $results;
    }

    public function countCommentsbyPost($post_id) {
      $this->db->query("SELECT * FROM comments WHERE post_id = :post_id");
       
      $this->db->bind(':post_id', $post_id);
  
      $this->db->resultSet();

      $results = $this->db->rowCount();

      return $results;
    }
    
  
//transmition in admin panel
    public function getFlaggedComment($comm_id) {
      $this->db->query('SELECT * FROM comments WHERE flag = flag + 1 ORDER BY date_comm');
      $this->db->bind(':comm_id', $comm_id);

      $row = $this->db->single();

      return $row;
    }

    public function countFlags(){
      $this->db->query('SELECT *  FROM comments WHERE flag > 0');
      $this->db->resultSet();
    
      $results = $this->db->rowCount();
    
      return $results;
    }

    public function deleteComment($comm_id) {
      $this->db->query('DELETE FROM comments WHERE comm_id = :comm_id');
    
     // Bind Values
      $this->db->bind(':comm_id', $comm_id);
    
     //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

//report a comment//
    public function flagComment($comm_id) {
 
      $this->db->query("UPDATE comments SET flag = flag + 1  WHERE comm_id = :comm_id ");
     
      $this->db->bind(':comm_id', $comm_id);
            
    
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
     

//accept a comment - erase the flag/
    public function eraseFlag($comm_id) {
      $this->db->query('UPDATE comments SET flag = 0 WHERE comm_id = :comm_id');
      $this->db->bind(':comm_id', $comm_id);

      // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getComment($comm_id)
    {
        $this->db->query('SELECT * FROM comments WHERE comm_id = :comm_id');
        $this->db->bind(':comm_id', $comm_id);

        $row = $this->db->single();

        return $row;
    }

}
  
  

