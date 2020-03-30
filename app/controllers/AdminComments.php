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
          'commentss' => $comments,
        ];

        $this->view('admincomments/index', $data);
      }
    }