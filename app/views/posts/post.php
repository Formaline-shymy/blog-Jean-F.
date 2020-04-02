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

              
                <p class="titleComments text-center">Laissez un commentaire</p> 
                               
           
           <?php foreach ($data['commentsByPostId'] as $commentByPostId): ?>
              <div class="comment">
                <div class ="row">
                  <div class="col-9 d-flex">
                    <p class="text-uppercase">
                     <strong> <?php echo $commentByPostId->author; ?></strong> </p>&nbsp;&nbsp;écrit: 
                      <?php echo $commentByPostId->content;?> 
                    </div>
                    <span class=" col-2 d-flex ml-5"> 
                    <button type="submit" id="clickflag" class="btn btn-link text-decoration-none text-dark"> Signaler ce commentaire</button>
                 
                        </span>
                      
                  </div>
                </div>
              
              <hr>
           <?php endforeach;?>
            
             </div>    
                <div class='form mb-5'>
         
                <form action="<?php echo URLROOT; ?>/posts/post/<?php echo $data['post']->post_id; ?>" method="post">
              <div class="form-group">
                <label for="author">Identificant:</label>
                <input id="author" name="author" type="text" class="form-control"required>
              </div>
              <div class="form-group">
                <label for="content">Commentaire:</label>
                <textarea id="content" name="content" class="form-control" rows="3" required></textarea>
              </div>
              <input type="hidden" name="post_id" value="<?php echo $data['post']->post_id; ?>">
              <input type="submit" class="btn btn-outline-light mt-2" value="Publier">
            </form>
           </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>      
