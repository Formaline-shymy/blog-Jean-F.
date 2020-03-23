<?php
  class Admin extends Controller {
    private $postModel;
    private $commentModel;

    public function __construct(){
      if (!isset($_SESSION['id'])) {
        redirect('index');
          // block access to admin profile for not register users
      }
      $this->adminModel = $this->model('AdminPost');
      $this->commentModel = $this->model('Comment');
   }  
  
      public function index(){
        $postsCount = $this->adminModel->countPosts();
        $commentsCount = $this->commentModel->countComments();
       

        $data = [
          'postsCount'=>$postsCount,
          'commentsCount'=>$commentsCount,

          
        ];
  
        $this->view('admin/index', $data);
      }
  }


