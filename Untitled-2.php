<?php
  class Posts extends Controller {

    private $postModel;
    private $commentModel;


    public function __construct(){
    
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
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
     $comments = $this->commentModel->getCommentsBypost_id($post_id);
          
     $data = [
      'posts' => $posts,
      'post' => $post,
      'post_id' => $post_id,
      'commentsBypost_id' => $comments,
     ];

    //  $this->view('posts/post', $data);
   
     if (is_null($post_id)) {
      $this->view('posts/post', $data);
     } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $data = [
          'nick' => $_POST['nick'],
          'comment' => $_POST['comment'],
          'post_id' => $_POST['post_id'],
        ];

        if (!$post) {
          $this->view('pages/error404');
         } else {
          $this->view('posts/post', $data);
         }
        }
       
     } 
    }
}   
  

