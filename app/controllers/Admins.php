<?php
  class Admins extends Controller {

    public function __construct(){
      if (!isset($_SESSION['id'])) {
        redirect('index.php');
        // block access to admin profile for not register users
    }

      $this->adminModel = $this->model('Admin');
     
    }
    
    public function index(){
         
      $data = [
        'title' => 'Profil administrateur',

    
      ];
     
      $this->view('admins/index', $data);
    }
    
  }


