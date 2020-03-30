<?php
  class User {
        private $db;

        public function __construct(){
        $this->db = new Database;
        }
       
        
        //Register User
        public function register ($data){
            $this->db-> query('INSERT INTO users (name, familyname, nick, password, email) VALUES (:name,:familyname, :nick, :password,:email)');
            // Bind all values
            $this->db->bind(':name', $data ['name']);
            $this->db->bind(':familyname', $data ['familyname']);
            $this->db->bind(':nick', $data ['nick']);
            $this->db->bind(':password', $data ['password']);
            $this->db->bind(':email', $data ['email']);
            
            //Execute
            if ($this->db ->execute()){
                return true;
            }else{
                return false;
            }
        }
        //log in user
        public function login($nick, $password){
          $this->db->query('SELECT * FROM users WHERE nick = :nick');
          $this->db->bind(':nick', $nick);

          $row = $this->db->single();

          $hashed_password = $row ->password;

          if(password_verify($password, $hashed_password)){
            return $row;
          } else{
            return false;         
           }
        }

        // Check user by nick
         public function findUserByNick($nick){
          $this->db->query('SELECT * FROM users WHERE nick = :nick');
          $this->db->bind(':nick', $nick);
    
          $row = $this->db->single();
    
          // Check row
          if($this->db->rowCount() > 0){
            return true;
          } else {
            return false;
          }
        }
        //  get User by ID
        public function getUserByID($id){
          $this->db->query('SELECT * FROM users WHERE id = :id');
          $this->db->bind(':id', $id);
    
          $row = $this->db->single();

          return $row;
        }
   }


  

