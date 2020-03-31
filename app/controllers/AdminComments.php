<?php
class AdminComments extends Controller {
      public function __construct(){
        if (!isset($_SESSION['id'])) {
            redirect('index');
            // block access to admin profile for not register users
        }
        $this->commentModel = $this->model('Comment');
      }

      public function index() {
        $comments = $this->commentModel->getComments();

        $data = [
          'comments' => $comments,
        
        ];

        $this->view('admincomments/index', $data);
      }

      public function show($comm_id){
          $comment = $this->commentModel->getCommentById($comm_id);
       
          $data = [
         'comment' => $comment,
         ];
      
         $this->view('admincomments/show', $data);
           
      }

      public function delete($comm_id){
        //post request
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $this->commentModel->getCommentById($comm_id);
         
          $data = [
         '$comm_id' => $comm_id,
         ];
      
         $this->view('admincomments/delete', $data);
        }    
        
        if($this->commentModel->deleteComment($comm_id)){
               
          redirect('admin/index');
        } else {
          die('Oups, alors!');
        }
      }



    }