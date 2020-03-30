<?php
  class Posts extends Controller {

    private $postModel;
    private $commentModel;


    public function __construct(){
    
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
     
    }

    public function index(){
     // get posts
      $posts = $this->postModel->getPosts();

      $data = [
        'posts' => $posts
      ];
      $this->view('posts/index', $data);
    }

  
  
    public function post($post_id) {

     $posts = $this->postModel->getPosts();
     $post = $this->postModel->getPostById($post_id);
     $comments = $this->commentModel->getComments();
     
     $commentsByPostId = $this->commentModel->getCommentsbyPostId($post_id);
 
          
     $data = [
      'posts' => $posts,
      'post' => $post,
      'post_id' => $post_id,
      'comments' => $comments,
      'commentsByPostId' => $commentsByPostId,
     ];

     $this->view('posts/post', $data);
  
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'author' => $_POST['author'],
          'content' => $_POST['content'],
          'post_id' => $_POST['post_id'],
        ];

        if(!empty($data['author']) && !empty($data['content']) ){
          // Validated
          if($this->commentModel->addComment($data)){
            
          $this->view('posts/post', $data);
        }
    
        } else {
          $data = [
            'author' => '',
            'post_id' => '',
            'content'=>'',
          ];
    
          $this->view('posts/index', $data);
       }       
      }
    }
  }