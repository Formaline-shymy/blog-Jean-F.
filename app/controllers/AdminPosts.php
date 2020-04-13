<?php
class AdminPosts extends Controller {

      public function __construct(){
        if (!isset($_SESSION['id'])) {
            redirect('index');
            // block access to admin profile for non register users
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

            /////    ADD ///

      public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             
       $data = [
           'title' => $_POST['title'],
           'date' => $_POST['date'],
           'chapter' =>$_POST['chapter'],
      
           'title_err' => '',
           'date_err' => '',
           'chapter_err'=> '',
       ];
       // Validate data
        if(empty($data['title'])){
        $data['title_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['date'])){
        $data['date_err'] = 'Veuillez choisir une date';}
        if(empty($data['chapter'])){
        $data['chapter_err'] = 'Veuillez écrir un chapitre';}
       // Make sure there is no errors
         if(empty($data['title_err']) && empty($data['date_err']) && empty($data['chapter_err'])){
          // Validated
          if($this->postModel->addPost($data)){
          redirect('admin/index');
          } else {
            die('Oups, un problème!');
          }
        } else {
        // Load view with errors
        $this->view('adminposts/add', $data);
         }
          
        } else {
         $data = [
         'title' => '',
         'date' => '',
         'chapter'=>'',
                ];
          $this->view('adminposts/add', $data);
             }       
            }
      
      ////////        SHOW              ////     
      
      public function show($post_id) {
        $post = $this->postModel->getPostById($post_id);
         $data = [
          'post' => $post,
        ];
           $this->view('adminposts/show', $data);
      }    
   
      ////////        EDIT              ////     
      
      public function edit($post_id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'post_id' =>$post_id,
          'title' => $_POST['title'],
          'date' => $_POST['date'],
          'chapter' =>$_POST['chapter'],
         
          'title_err' => '',
          'date_err' => '',
          'chapter_err'=> '',
        ];
        
        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez remplir ce champ';
        }
        if(empty($data['date'])){
          $data['date_err'] = 'Veuillez choisir une date';
        }
        if(empty($data['chapter'])){
          $data['chapter_err'] = 'Veuillez écrir un chapitre';
        }

        // Make sure there is no errors
        if(empty($data['title_err']) && empty($data['date_err']) && empty($data['chapter_err'])){
          // Validated
          if($this->postModel->updatePost($data)){
           
            redirect('admin/index');
          } else {
            die('Oups, alors!');
          }
        } else {
          // Load view with errors
          $this->view('adminposts/edit', $data);
        }
    
      } else {
  
     // Get existing chapter from model
     $post = $this->postModel->getPostById($post_id);
  
     $data = [
      'post_id' => $post_id,
      'title' => $post->title,
      'date' => $post->date,
      'chapter' => $post->chapter,
       ];
     $this->view('adminposts/edit', $data);
    }
    }
      
      ////////        DELETE              ////     
      
    public function delete($post_id){
      //post request
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->postModel->getPostById($post_id);
         
        $data = [
          'post_id' => $post_id,
        ];
        
        $this->view('adminposts/delete', $data);
      }    
          
      if($this->postModel->deletePost($post_id)){   
         redirect('admin/index');
      } else {
        die('Oups, alors!');
        }
    }
}
