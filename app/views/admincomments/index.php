<?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <main id="main-doc">  
        
        
             <h2 class="text-uppercase text-center text-dark  mb-3"> Liste des  commentaires</h2> 
          
        
<!-- 
        <div class="container">
          <ul class="posts_list">
            <?php foreach ($data['posts'] as $post): ?>
            <div class="list__item card card-body mb-3">
              <h4 class="card-title">
                <?php echo $post->title; ?>
              </h4>
              <div class= "postdate"> 
                    <p> Publié le <?php echo date('d M Y', strtotime($post->date)); ?></p>
                    </div>
                  </div>
              <p class="postshorten card-text ">
                      <?php if (strlen($post->content) > 500): ?>
                      <?php echo substr($post->content, 0, strrpos(substr($post->content, 0, 525), ' ')); ?>  ...
                      <a href="<?php echo URLROOT; ?>/adminposts/show/<?php echo $post->post_id; ?>">
                      <span class="text-white"> Voir plus </span></a>
                      <?php else: ?>
                      <?php echo $post->content; ?>
                      <?php endif;?>
              </p>    
                    <hr>
                  <?php endforeach; ?>
              
            </div> -->
</main>