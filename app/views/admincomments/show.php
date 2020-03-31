<?php require APPROOT . '/views/inc/adminheader.php'; ?>     
<main id="main-doc">  
    <p class="titlePost  text-center  "> 
        <?php echo $data['comment']->author; ?>
     </p>
 
    <div class="container py-2">
        <p class="text-justify">
          <?php echo $data['comment']->content; ?>
        </p>
         
        <div class="row ">
          <div class="col mt-2">
            <a href="<?php echo URLROOT; ?>/admincomments/index" class="btn btn-outline-light"><i class="far fa-thumbs-up"></i> Accepter ce commentaire </a>
          </div>
          <div class="col mt-2">
            <div class="col">
            <a href="<?php echo URLROOT; ?>/admincomments/delete/<?php echo $data['comment']->comm_id; ?>" class="btn btn-outline-light"><i class="far fa-trash-alt"></i> Supprimer ce commentaire </a>
            </div> 
            
          </div>
        </div>
    </div>
</form>
   </main>
