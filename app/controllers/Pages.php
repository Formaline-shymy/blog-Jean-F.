<?php
  class Pages extends Controller {
    
    public function __construct(){
      $this->postModel = $this->model('Post');
    }
    
    public function index(){
      $posts = $this->postModel->getPosts();
      
      $data = [
        'title' => 'Blog de Jean Forteroche',
        'posts' => $posts
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'Biographie',
        'description1' => 'JEAN FORTEROCHE',
        'description2' => 'De roman en roman, Jean Forteroche a noué un lien unique avec les lecteurs',
      ];

      $this->view('pages/about', $data);
    }

    public function biblio(){
      $data = [
        'title' => 'Bibliographie',
        'description' => 'Bla bla bla bla',
      ];

      $this->view('pages/biblio', $data);
    }

  }