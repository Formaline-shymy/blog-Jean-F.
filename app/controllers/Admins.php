<?php
  class Admins extends Controller {

    public function __construct(){
      $this->adminModel = $this->model('Admin');
     
    }
    
    public function index(){
         
      $data = [
        'title' => 'Profil administrateur',

    
      ];
     
      $this->view('admins/index', $data);
    }
  }


