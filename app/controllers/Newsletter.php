<?php
  class Newsletter extends Controller {
   
    public function __construct(){
      $this->pagesModel = $this->model('Page');    
    }
    
    public function index(){
        $data = [ ];
    
          $this->view('pages/newsletter', $data);
    }
  }