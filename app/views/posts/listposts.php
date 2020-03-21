<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <div class="p-3">
           
          <?php foreach($data['posts'] as $post) : ?>
           <div class= "postlink">
              <p class="titlePost">
                <a href="<?php echo URLROOT; ?>/posts/post/<?php echo $post->post_id; ?>">
                <?php echo $post->post_title; ?>
                </a>  
              </p>  
            </div>  
           
            <div class= "postdate"> 
             <p> Publié le <?php echo date('d M Y', strtotime($post->post_date)); ?></p>
            </div>

            <div class= "postshort">
                <?php echo $post->post_contentshort; ?> &nbsp;&nbsp;
                <a href="<?php echo URLROOT; ?>/posts/post/<?php echo $post->post_id; ?>"> Lire la suite...</a>
            </div>
                      
            <hr>
          <?php endforeach; ?>
        
        </div>
     </div>
   
  <?php require APPROOT . '/views/inc/footer.php'; ?>       

       

      