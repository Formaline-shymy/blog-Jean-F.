<?php require APPROOT . '/views/inc/adminheader.php'; ?>     
<main id="main-doc">  
    <div class="commentauthor container text-left py-2 px-5">
       <p class="commentauthor  text-left py-2 "> 
        <?php echo $data['comment']->author; ?> écrit : 
       </p>
    </div>
 
    <div class="commentcontent container text-left py-2 px-5">
        <p class="text-justify">
          <?php echo $data['comment']->content; ?>
        </p>
    </div>
    <div class="row mt-5 px-5">
      <div class="col">
          <a href="<?php echo URLROOT; ?>/admincomments/erase<?php echo $data['comment']->comm_id; ?>" class="btn btn-outline-light"><i class="far fa-thumbs-up"></i> Accepter ce commentaire </a>
      </div>
      <div class="col">
           <a href="<?php echo URLROOT; ?>/admincomments/delete/<?php echo $data['comment']->comm_id; ?>" class="btn btn-outline-light"><i class="far fa-trash-alt"></i> Supprimer ce commentaire </a>
      </div> 
            
    </div>
     
</main>
