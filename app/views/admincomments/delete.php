<?php require APPROOT . '/views/inc/adminheader.php'; ?>
<main id="main-doc">  
  <h2 class="text-uppercase text-center text-white mt-0 mb-3"> Supprimer ce comm</h2>
    <form action="<?php echo URLROOT; ?>/admincomments/delete/<?php echo $data['comm_id']; ?>" method="post">
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
          <input type="submit" class="btn btn-info btn-block mt-3" value="Supprimer">                 
        </div>
    </form>           
</main>
