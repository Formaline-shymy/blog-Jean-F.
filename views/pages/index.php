<?php require APPROOT . '/views/inc/header.php'; ?>
  <!-- <h1><?php echo $data['title']; ?></h1> --> 
  
  <span class = news>Nouveau romans en ligne: Billet simple pour Alaska</span>
  <div id="global"> 
   
    <?php foreach($data['posts'] as $post) : ?>
      <a href="#">
         <h5><?php echo $post->post_title; ?></h5> 
      </a>
      <br>

      <span><?php echo $post->post_date; ?></span> 
      <p><?php echo $post->post_content; ?></p> 
      <hr>
      
    <?php endforeach; ?>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
