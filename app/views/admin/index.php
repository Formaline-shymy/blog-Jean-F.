<?php require APPROOT . '/views/inc/adminheader.php'; ?>

<main id="main-doc">
  <header class="text-center text-white">Profil d'administrateur</header>   
   <br><br>
      
  <section id="Tab">
  <h2 class="text-uppercase text-center text-white mb-3"><i class="fas fa-user-edit"></i>  Tableau de bord</h2> 
    <h2 class = "tablename  text-center text-white mb-3" > de <?php echo $_SESSION['name']; ?><h2>
    <h3 class = "todaydate text-center text-white mb-5" >Aujourd'hui nous sommes le <?php setlocale(LC_TIME, 'fra_fra'); echo strftime('%d %B %Y')?> et il est
    <?php echo date('H:i:s'); ?></h3>
      
        
            <!-- <a href="<?php echo URLROOT; ?>/adminPosts"> -->
            <div class="jumbotron">
            <h2 class="display-8 mx-5">
              <i class="fas fa-book ml-5"></i>
              <strong> <?php echo $data['postsCount']; ?></strong> chapitres du livre 'Un Billet Simple Pour
                L'Alaska' <br>
               <p class="et text-center"> et </p>
<!--          <a href="<?php echo URLROOT; ?>/adminComments">
 -->          <i class="fas fa-comments ml-5"></i>
              <strong><?php echo $data['commentsCount']; ?></strong> commentaires ont été publiés.
            </h2>
          </div>
  
        


</section>

 </main> 

