<?php
  class Error404 extends Controller {
   
    public function __construct(){
      $this->pagesModel = $this->model('Page');    
    }
    
    public function index(){
        $data = [];
    
          $this->view('pages/error404', $data);
    }
  }