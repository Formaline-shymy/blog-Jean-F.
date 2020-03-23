<?php
class AdminPosts extends Controller {
    private $postModel;

    public function __construct(){
        if (!isset($_SESSION['id'])) {
            redirect('index');
            // block access to admin profile for not register users
        }
    $this->postModel = $this->model('AdminPost');
    }
 
    public function index(){
        $posts = $this->AdminPostModel->getPosts();
       

        $data = [
          'posts'=>$posts,
        ];
  
        $this->view('admin/index', $data);
      }

      public function add(){
      
           $data = [
         'title' => $_POST['post_title'],
         'date' => $_POST['post_date'],
         'content' => $_POST['post_content'],
    
        ];
     $this->view('adminposts/add', $data);
             
         if ($this->AdminPostModel->addPost($data)) {
          die('Chapitre a été ajouté');
          redirect('AdminPosts');
         } else {
          die('Oups, il y a eu une erreur');
         }
        }
      }





