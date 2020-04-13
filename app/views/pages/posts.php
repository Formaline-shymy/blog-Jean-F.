<?php require APPROOT . '/views/inc/header.php'; ?>
 <div class="container p-3"> 
          <?php foreach($data['posts'] as $post) : ?>
            <div class= "postlink">
              <p class="titlePost">
                <a href="<?php echo URLROOT; ?>/posts/<?php echo $post->post_id; ?>">
                
                <?php echo $post->title; ?>
                </a>  
              </p>  
            </div>  
       
           <div class= "postdate"> 
             <p> Publié le <?php echo date('d M Y', strtotime($post->date)); ?></p>
            </div>
           
            <p class= "postshorten">
              <?php if (strlen($post->chapter) > 500): ?>
              <?php echo substr($post->chapter, 0, strrpos(substr($post->chapter, 0, 525), ' ')); ?>  ...
               <a href="<?php echo URLROOT; ?>/posts/<?php echo $post->post_id; ?>">
               <span class="text-white"> Lire la suite</span></a>
              <?php else: ?>
              <?php echo $post->chapter; ?>
              <?php endif;?>
            
            </p>    
            <hr>
          <?php endforeach; ?>  
    </div>  
  <?php require APPROOT . '/views/inc/footer.php'; ?> 