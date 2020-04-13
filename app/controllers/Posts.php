<?php
  class Posts extends Controller {

    private $postModel;
    private $commentModel;
  
    public function __construct(){
    
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
    }  


    public function index($post_id = null) {
        $posts = $this->postModel->getPosts();
        $post = $this->postModel->getPostById($post_id);
        $comments = $this->commentModel->getCommentsbyPostId($post_id);
        $countCommentsByPostId = $this->commentModel->countCommentsbyPost($post_id); 

          $data = [
          'posts' => $posts,
          'post' => $post,
          'comments' => $comments,
          'countCommentsByPostId' => $countCommentsByPostId, 
          ];

      if (is_null($post_id)) {
        $this->view('pages/posts', $data);
      
      } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $data = [
          'author' => $_POST['author'],
          'content' => $_POST['content'],
          'post_id'  => $_POST['post_id'], 
        ];

        if ($this->commentModel->addComment($data)) {
          // header('Location: ' . URLROOT . '/' . 'posts/' . $post_id);
          redirect('posts/'. $post_id);
        } else {
        die('oups');
        }
      } else {
        if (!$post) {
        $this->view('pages/error404');
        } else {
        $this->view('pages/post', $data);
        }
      }
      }
    }

     public function flag($comm_id) {
    
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
     
          if( $this->commentModel->flagComment($comm_id)){
            redirect('posts/');
          
         }else {
          die('Oups, alors!');
        }
        } 
     }
  }