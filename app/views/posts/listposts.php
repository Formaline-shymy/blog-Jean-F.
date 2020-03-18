<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <div class="p-3">
           
          <?php foreach($data['posts'] as $post) : ?>
           <div class= "postlink">
           <a href="<?php echo URLROOT; ?>/posts/post<?php echo $post->post_id; ?>">
              <p class="titlePost"> 
              <?php echo $post->post_title; ?>
           </div>
             </p></a>  
          <p> Publié le <?php echo date('d M Y', strtotime($post->post_date)); ?></p>
      
          <div class= "postlink"><?php echo $post->post_contentshort; ?> &nbsp;&nbsp;
            <a href="<?php echo URLROOT; ?>/posts/post/<?php echo $post->post_id; ?>"> Lire la suite...</a></div>

          
          <hr>
          <?php endforeach; ?>
        
       </div>
    </div>
   
  <?php require APPROOT . '/views/inc/footer.php'; ?>       