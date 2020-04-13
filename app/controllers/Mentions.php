<?php
  class Mentions extends Controller {
   
    public function __construct(){
      $this->pagesModel = $this->model('Page');    
    }
    
    public function index(){
        $data = [
            'title' => 'Mentions légales', 
        ];
    
          $this->view('pages/mentions', $data);
    }
  }