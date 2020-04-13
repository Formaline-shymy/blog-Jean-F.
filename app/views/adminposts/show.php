<?php require APPROOT . '/views/inc/adminheader.php'; ?>     
  <main id="main-doc">  
    <p class="titlePost  text-center  "> 
      <?php echo $data['post']->title; ?>
    </p>
    <div class="container py-2">
        <p class="text-justify">
          <?php echo $data['post']->chapter; ?>
        </p>
         
        <div class="row ">
          <div class="col mt-2">
            <a href="<?php echo URLROOT; ?>/adminposts/edit/<?php echo $data['post']->post_id; ?>" class="btn btn-light btn-block">Modifier ce chapitre </a>
          </div>
          <div class="col mt-2">
            <div class="col">
            <a href="<?php echo URLROOT; ?>/adminposts/delete/<?php echo $data['post']->post_id; ?>" class="btn btn-danger btn-block">Supprimer ce chapitre </a>
            </div> 
          </div>
        </div>
    </div>
  </main>


   