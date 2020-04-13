<?php
  class About extends Controller {
   
    public function __construct(){
      $this->pagesModel = $this->model('Page');    
    }
    
    public function index(){
        $data = [
            'title' => 'Biographie',
          ];
    
          $this->view('pages/about', $data);
        }
 }