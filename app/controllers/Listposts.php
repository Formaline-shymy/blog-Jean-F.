<?php
  class Listposts extends Controller {

    private $postModel;
  

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
  }