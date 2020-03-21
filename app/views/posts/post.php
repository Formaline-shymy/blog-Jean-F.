<?php require APPROOT . '/views/inc/header.php'; ?>      
 
    <div class="container">
        <div class="p-3">
            <p class="linkback">
               <a href="<?php echo URLROOT; ?>/posts/listposts">Retour à la liste des chapitres</a>
            </p>


                <p class="titlePost  text-center  "> 
                      <?php echo $data['post']->post_title; ?>
                </p>
                <hr class="stylepost mt-5">
                 <br>
                <p class="contentPost text-justify ">
                       <?php echo $data['post']->post_content; ?>
                </p>         
             
                <hr>
                <p class="titleComments">Laissez un commentaire à <?php echo $data['post']->post_title; ?>  
                
                <div class='form mb-5'>
         
                  <form action="<?php echo URLROOT; ?>/posts/post/<?php echo $data['post']->post_id; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="author" name="author" placeholder="Votre identifiant" 
                               required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Votre commentaire" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Publier</button>
                  </form>
                </div>


        <div class="share-chapter">
        <div class="container">
            <div class="d-flex align-items-center ">
                <p class="ml-auto mr-3">Partagez sur:</p>
                <ul class="d-flex social-icons list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f" style="color:black"></i></a></li>&nbsp;&nbsp;
                    <li><a href="#"><i class="fab fa-twitter" style="color:black"></i></a></li>&nbsp;&nbsp;
                    <li><a href="#"><i class="fab fa-tumblr" style="color:black"></i></li></a>&nbsp;&nbsp;
                    <li><a href="#"><i class="fab fa-pinterest" style="color:black"></i></a></li>
                </ul>
            </div>
        </div>
        </div>
      </div>   
    </div>  

<?php require APPROOT . '/views/inc/footer.php'; ?>   