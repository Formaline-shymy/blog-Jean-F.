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

      $this->view('posts/listposts', $data);
    }


    public function post($post_id = null) {

     $posts = $this->postModel->getPosts();
     $post = $this->postModel->getPostById($post_id);
    //  $comments = $this->commentModel->getComments($post_id);
     
     $commentByPostId = $this->commentModel->getCommentbyPostId($post_id);
 
          
     $data = [
      'posts' => $posts,
      'post' => $post,
      'post_id' => $post_id,
      'commentByPostId' => $commentByPostId,
     ];

     
   
     if (is_null($post_id)) {
      $this->view('posts/listposts');
     } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $data = [
          'comm_author' => $_POST['comm_author'],
          'comm_content' => $_POST['comm_content'],
          'post_id' => $_POST['post_id'],
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



        
  } 
    

/* $post_id = $this->commentModel->getCommentByPostId("post_id");
$author = $this->commentModel->getComments("comm_author");
$content = $this->commentModel->getComments("comm_content");

$data = [
  'content' => $content,
  'author' => $author,
  'post_id' => $post_id,
   ];


   $this->view('posts/post', $data);

}
 */