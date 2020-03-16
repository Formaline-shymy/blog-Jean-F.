<?php
  class Pages extends Controller {
    private $post;

    public function __construct(){
      $this->pagesModel = $this->model('Page');
     
    }
    
    public function index(){
         
      $data = [
        'title' => 'Blog de Jean Forteroche',

        'description' =>'Eam prima minimum in. Mutat elitr intellegat vel no, vix adhuc impedit feugait ne. Ad eos alii debet quodsi, et harum placerat senserit vix. Et eum possim perpetua. Ius appareat conceptam contentiones te, vim in graeco discere, et minim argumentum quo.',
        
        'description2'=> 'Id has purto gubergren vulputate. Has an prima bonorum, enim salutandi mei ut. Nec ex eligendi adolescens, no nam sale graecis probatus, eros commodo adipisci eam ea. Aliquid explicari mei at, inimicus iracundia eu nec. Usu cu suas oblique fastidii, alia natum pri at. Ad per vidisse eripuit delicatissimi.'
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
  
 
    public function mentions(){
      $data = [
        'title' => 'Mentions légales', 
      ];

      $this->view('pages/mentions', $data);
    }
}
