<?php
  class Admin extends Controller {
    private $postModel;
    private $commentModel;

    public function __construct(){
      if (!isset($_SESSION['id'])) {
        redirect('index');
          // block access to admin profile for non register users
      }
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
   }  
  
      public function index(){
        $postsCount = $this->postModel->countPosts();
        $countComments = $this->commentModel->countComments();
         $flagsCount = $this->commentModel->countFlags();
       

        $data = [
          'postsCount'=>$postsCount,
          'countComments'=>$countComments,
          'flagsCount'=>$flagsCount,
         
        ];
  
        $this->view('admin/index', $data);
      }
  }


