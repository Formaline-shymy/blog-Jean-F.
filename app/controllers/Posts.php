<?php
  class Posts extends Controller {
    public function __construct(){
    
      $this->postModel = $this->model('Post');
      
    }

    public function index(){
     
      $posts = $this->postModel->getPosts();

      $data = [
        'posts' => $posts
        
      ];

      $this->view('posts/listposts', $data);
    }


    public function post(){
            

        $data = [
          'title' => 'Chapitre',
            'content' => 'Miau',
        ];
  
        $this->view('posts/post/post_id', $data);
      
      }
      
    
     

  }