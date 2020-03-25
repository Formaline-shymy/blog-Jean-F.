<?php
class AdminPosts extends Controller {
      public function __construct(){
        if (!isset($_SESSION['id'])) {
            redirect('index');
            // block access to admin profile for not register users
        }
    $this->postModel = $this->model('Post');
    }
      public function index() {
          $posts = $this->postModel->getPosts();

          $data = [
          'posts' => $posts,
          ];

          $this->view('adminposts/index', $data);
      }
    
      public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        $data = [
        //  'description' =>'miauuuuuuuu',
          'title' => $_POST['title'],
          'date' => $_POST['date'],
          'content' =>$_POST['content'],

          'title_err' => '',
          'date_err' => '',
          'content_err'=> '',
        ];
        
        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez remplir ce champ';
        }
        if(empty($data['date'])){
          $data['date_err'] = 'Veuillez choisir une date';
        }
        if(empty($data['content'])){
          $data['content_err'] = 'Veuillez écrir un chapitre';
        }
        // Make sure there is no errors
        if(empty($data['title_err']) && empty($data['date_err']) && empty($data['content_err'])){
          // Validated
          if($this->postModel->addPost($data)){
             redirect('adminposts/index');
          } else {
            die('Oups, alors!');
          }
        } else {
          // Load view with errors
          $this->view('adminposts/add', $data);
        }
    
      } else {
        $data = [
          'title' => '',
          'date' => '',
          'content'=>'',
        ];
  
        $this->view('adminposts/add', $data);
      }       
     }

     public function show($id)
     {
      $chapter = $this->chapterModel->getChapterById($id);
    
      $data = [
       'chapter' => $chapter,
      ];
    
      $this->view('adminchapters/show', $data);
     }
    

      
      public function edit(){
      $data = [];
      $this->view('adminposts/edit', $data);
      }

      public function delate(){
      $data = [];
      $this->view('adminposts/edit', $data);
      }
      
}




