<?php
  class Admin extends Controller {
    private $postModel;
    private $commentModel;

    public function __construct(){
      if (!isset($_SESSION['id'])) {
        redirect('index');
          // block access to admin profile for not register users
      }
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
   }  
  
      public function index(){
        $postsCount = $this->postModel->countPosts();
        $commentsCount = $this->commentModel->countComments();
       

        $data = [
          'postsCount'=>$postsCount,
          'commentsCount'=>$commentsCount,
          // 'title'     =>'a kuku'   
        ];
  
        $this->view('admin/index', $data);
      }
  }


