<?php require APPROOT . '/views/inc/header.php'; ?>      
   <div class="container">
     <div class="p-3">
<!--------- Show the post ----------------------->
      <p class="linkback">
        <a href="<?php echo URLROOT; ?>/posts">Retour à la liste des chapitres</a>
      </p>
      <p class="titlePost  text-center  "> 
        <?php echo $data['post']->title; ?>
      </p>
      <hr class="stylepost1 mt-5"><br>
      <p class="contentPost text-justify ">
        <?php echo $data['post']->chapter; ?>
      </p>         
      <hr class="stylepost2 mt-3">


<!------------ Show comment/comments ------------------>
      <p class = "countcommentsByPostId">
        <?php if ($data['countCommentsByPostId'] === 0): ?>
          <h5 class ="text-white "><span class="titleComments invisible mb-4"><?php echo $data['countCommentsByPostId']; ?></span>Il n'y a pas encore de commentaire ...</h5>
          <?php elseif ($data['countCommentsByPostId'] === 1): ?>
          <h5 class ="text-white"><span class="titleComments  mb-4"><?php echo $data['countCommentsByPostId']; ?></span>  Commentaire: </h5>  
          <?php else: ?>
          <h5 class ="text-white"><span class="titleComments mb-4"><?php echo $data['countCommentsByPostId']; ?></span>  Commentaires: </h5>
          <?php endif;?>
      </p>
      <br> 
    
      <div class=showcomments">
        <?php foreach ($data['comments'] as $comment): ?>
         <?php echo date('d/m/Y', strtotime($comment->date_comm)); ?>
            <div class ="row"> 
              <div class="col-9 d-flex ">
                <p class="text-uppercase">
                  <strong> <?php echo $comment->author; ?></strong> </p>
                  &nbsp;&nbsp;écrit: 
                  <?php echo $comment->content;?>
              </div>
              <span class="flag col-3  d-flex justify-content-end"> 
                <input type="hidden" name="id" value="<?php echo $comment->post_id; ?>">
                <div class="clickflagModal" data-toggle="modal"
                data-target="#flagModal<?php echo $comment->comm_id; ?>">Signaler ce commentaire</div>
              </span>
            </div>
            <hr> 
            
                     <!------------ Flag the comment----------> 
         <form action="<?php echo URLROOT; ?>/posts/flag/<?php echo $comment->comm_id; ?>" method="post">
            <div class="modal fade" id="flagModal<?php echo $comment->comm_id; ?>" tabindex="-1" 
                  aria-labelledby="flagComment<?php echo $comment->post_id; ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Êtes vous sûr de vouloir signaler ce commentaire ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-around">

                        <input type="hidden" name="comment_id" value="<?php echo $comment->post_id; ?>">
                        <button type="button" class=" btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-outline-info">Signaler</button>
                    </div>
                </div>
              </div>
             </div>
          </form>

        <?php endforeach;?>
      </div>
         

<!-- Post a comment -->
        <p class="titleComments text-center">Laissez un commentaire</p>          
          <form action="<?php echo URLROOT; ?>/posts/<?php echo $data['post']->post_id; ?>" method="post">
            <div class='form mb-5'>
              <div class="form-group">
                <label for="author">Identificant:</label>
                <input id="author" name="author" type="text" class="form-control"required>
              </div>
              <div class="form-group">
                <label for="content">Commentaire:</label>
                <textarea id="content" name="content" type="text"  class="form-control" rows="3" required></textarea>
              </div>
              <input type="hidden" name="post_id" value="<?php echo $data['post']->post_id; ?>">
              <input type="submit" class="btn btn-outline-light mt-2" value="Publier">
            </div>
          </form>
<!-- end post a comment   -->


          <div class="sharepost">
            <div class="container">
              <div class ="row">
                <p class="mr-3">Partagez sur:</p>
                  <ul class="d-flex list-unstyled ">
                    <li><a href="#"><i class="fab fa-facebook-f text-dark mr-4 "></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter  text-dark"></i></a></li>
                  </ul>
              </div> 
                    
            </div>
          </div>
  </div>
</div>
 <?php require APPROOT . '/views/inc/footer.php'; ?> 
