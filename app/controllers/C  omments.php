<?php
  class Comments extends Controller {
    private $commentModel;
  

    public function __construct(){
    
      $this->postModel = $this->model('Post');
      $this->commentModel = $this->model('Comment');
    }  
    

    public function index() {
    }

    public function flag($post_id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $this->commentModel->getCommentsbyPostId($post_id);

        $data = [
        
          'post_id' => $post_id,
        ];

        $this->view('posts/flag', $data);}

       if( $this->commentModel->flagComment($data)){
        redirect('posts/'. $post_id);
          } else {
            die('Oups, alors!');
          }
      }
      }
  