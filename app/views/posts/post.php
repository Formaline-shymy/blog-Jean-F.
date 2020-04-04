<?php require APPROOT . '/views/inc/header.php'; ?>      
    <div class="container">
        <div class="p-3">
            <p class="linkback">
               <a href="<?php echo URLROOT; ?>/posts/index">Retour à la liste des chapitres</a>
            </p>
                <p class="titlePost  text-center  "> 
                  <?php echo $data['post']->title; ?>
                </p>
                <hr class="stylepost1 mt-5">
                 <br>
                <p class="contentPost text-justify ">
                  <?php echo $data['post']->chapter; ?>
                </p>         
               
                <hr class="stylepost2 mt-3">
<!-- Show comment/comments -->
          <p class = "countcommentsByPostId">
            <?php if ($data['countCommentsByPostId'] === 0): ?>
            <h5 class ="text-white "><span class="titleComments invisible"><?php echo $data['countCommentsByPostId']; ?></span>   Il n'y a pas encore de commentaire ...</h5>
            <?php elseif ($data['countCommentsByPostId'] === 1): ?>
              <h5 class ="text-white"><span class="titleComments  mb-4"><?php echo $data['countCommentsByPostId']; ?></span>  Commentaire: </h5>  
            <?php else: ?>
            <h5 class ="text-white"><span class="titleComments mb-4"><?php echo $data['countCommentsByPostId']; ?></span>  Commentaires: </h5>
            <?php endif;?>
            </p>
          <br> 
          <?php foreach ($data['commentsByPostId'] as $commentByPostId): ?>
            <div class="comment">
            <!-- <form  action="<?php URLROOT; ?>/posts/flag/<?php  $comm_id ?>" method="post">   -->
             <!-- <p class="text-sm font-italic">
             <?php echo date('d/m/Y', strtotime($commentByPostId->date_comm)); ?></p> -->
              <div class ="row"> 
                 <div class="col-9 d-flex">
                  <p class="text-uppercase">
                    <strong> <?php echo $commentByPostId->author; ?></strong> </p>
                    &nbsp;&nbsp;écrit: 
                    <?php echo $commentByPostId->content;?>
                </div>
                    <span class="flag col-2 d-flex ml-5"> 
                    <!-- <a href="<?php echo URLROOT; ?>/posts/flag/<?php echo $data-> comm_id; ?>" class= "btn btn-sm btn-link text-decoration-none text-dark">Signaler ce commentaire</a>    -->
                   </span>    
                                



              </div>
            </div>        
              <hr>
   <?php endforeach;?>
           
<!-- Post a comment -->
        <p class="titleComments text-center">Laissez un commentaire</p>          
          <form action="<?php echo URLROOT; ?>/posts/post/<?php echo $data['post']->post_id; ?>" method="post">
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

        </div>
        </div>
   
<?php require APPROOT . '/views/inc/footer.php'; ?>      