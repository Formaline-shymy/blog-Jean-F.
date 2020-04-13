<?php require APPROOT . '/views/inc/adminheader.php'; ?>

<main id="main-doc">
  <header class="text-center text-white">Profil d'administrateur</header>   
   <br><br>
      <section id="Tab">
        <h1 class = "tablename  text-center text-white mb-3" >Bonjour <?php echo $_SESSION['name']; ?><h1>
        <h3 class = "todaydate text-center text-white mb-5" >Aujourd'hui nous sommes le <?php setlocale(LC_TIME, 'fra_fra'); echo strftime('%d %B %Y')?> et il est
            <?php
              date_default_timezone_set('Europe/Paris');
              echo date("H");?>h<?php echo date ("i");?>
        </h3>
        <div class="jumbotron text-center">
          <h4 class="textjumbo mx-5">
              <a href="<?php echo URLROOT; ?>/adminposts/index">
              <i class="fas fa-book ml-5">&nbsp</i><strong> <?php echo $data['postsCount']; ?></strong> chapitres du livre 'Un Billet Simple Pour
                L'Alaska' ont été publiés</a> <br>
              <br> <div class="et text-primary"> et </div> <br>
             <a href="<?php echo URLROOT; ?>/admincomments/index">
                <i class="fas fa-comments ml-5">&nbsp</i><strong><?php echo $data['countComments']; ?></strong> commentaires ont été ajoutés</a> <br>
               <br> <div class="dont text-primary"> dont</div> <br>
               <a href="<?php echo URLROOT; ?>/admincomments/index"><i class="fab fa-font-awesome-flag">&nbsp</i><strong><?php echo $data['flagsCount']; ?></strong> commentaire(s) ont été signalés.</a>
          </h4>
        </div> 
      </section>
</main> 