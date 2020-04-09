<?php
  class Home extends Controller {
   
    public function __construct(){
      $this->pagesModel = $this->model('Page');    
    }
    
    public function index(){
         
      $data = [
         'title' => 'Blog de Jean Forteroche',
         'description' =>'Eam prima minimum in. Mutat elitr intellegat vel no, vix adhuc impedit feugait ne. Ad eos alii debet quodsi, et harum placerat senserit vix. Et eum possim perpetua. Ius appareat conceptam chapterontentiones te, vim in graeco discere, et minim argumentum quo.',
         
         'booktitle'=>"Un billet simple pour l'Alaska",

         'sommaire'=>'Augue persius per ea. Idque detraxit qui ei, pro nibh nullam consequuntur cu. Eu mundi laoreet duo, id delectus convenire intellegebat eum. Vocent timeam offendit qui ad, qualisque dissentias ea vim. Qui menandri tacimates gloriatur in, tale utroque vis ne, altera cetero recteque ad cum. Quo ne aliquid comprehensam, vel copiosae intellegat eu. Ei mel cibo consul suscipiantur, vim in debet suscipiantur.' 
      ];
     
      $this->view('pages/index', $data);
    }


}
