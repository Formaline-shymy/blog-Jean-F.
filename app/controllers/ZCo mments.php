<?php
  class Comments extends Controller {
    private $commentModel;
    private $postModel;


    public function __construct(){
    
      $this->commentModel = $this->model('Comment');
     
    }

    public function index() {
  
    }

      public function comment ($comm_id){
      $comment = $this->commentModel->getComment($comm_id);
      $comments = $this->commentModel->getComments($comm_id);
      $data = [
      'comment' => $comment,
      'comments'=>$comments,
      'comm_id' => $comm_id,
      ];
      
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


          public function flag($comm_id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $this->commentModel->getComment($comm_id);
            
            
      
              $data = [
              'flag' => '1',
              ];
      
              $this->view('comments/flag', $data);}
      
            if( $this->commentModel->flagComment($comm_id)){
                redirect ("posts", "index/"  );
                } else {
                  die('Oups, alors!');
                }
            }
  


}