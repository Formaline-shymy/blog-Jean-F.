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


    public function post($post_id = null) {

     $posts = $this->postModel->getPosts();
     $post = $this->postModel->getPostById($post_id);
        
     $data = [
      'posts' => $posts,
      'post' => $post,
      'post_id' => $post_id,
     ];

     $this->view('posts/post', $data);
   
     if (is_null($post_id)) {
      $this->view('posts/post', $data);
     } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
       $data = [
       'post_id' => $_POST['post_id'],
       ];
       $this->view('posts/post', $data);

      }
     
       } 
      }
      
}