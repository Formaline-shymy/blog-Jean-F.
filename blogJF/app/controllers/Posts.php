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
    $commentsByPostId = $this->commentModel->getCommentsbyPostId($post_id);
    $countCommentsByPostId = $this->commentModel->countCommentsbyPost($post_id); 

  $data = [
   'posts' => $posts,
   'post' => $post,
   'post_id' => $post_id,
   'commentsByPostId' => $commentsByPostId,
   'countCommentsByPostId' => $countCommentsByPostId, 
  ];

  if (is_null($post_id)) {
   $this->view('posts/index', $data);
   
  } else {
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = [
      'author' => $_POST['author'],
      'content' => $_POST['content'],
      'comm_id' => $_POST['comm_id'], 
      'post_id'  => $_POST['post_id'], 
    ];

    if ($this->commentModel->addComment($data)) {
     
    } else {
     die('Something went wrong');
    }
   } else {
    if (!$post) {
     $this->view('pages/error404');
    } else {
     $this->view('posts/post', $data);
    }
   }
  }
}

public function flag($comm_id) {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $this->commentModel->getComment($comm_id);
  
    $data = [
    'flag' => 1,
    ];

    $this->view('posts/flag', $data);
  }

     $this->commentModel->flagComment($comm_id);
     

}     




  }