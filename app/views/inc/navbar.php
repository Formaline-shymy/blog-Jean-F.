<navbar>
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?php echo URLROOT; ?>">Accueil</a>
      <a href= "<?php echo URLROOT; ?>/pages/about">Biographie</a>
      <a href="<?php echo URLROOT; ?>/posts/listposts">Lire des chapitres de Billet simple pour l'Alaska</a>
      <a href="<?php echo URLROOT; ?>/pages/biblio">Romans</a>
      <!-- <a href="<?php echo URLROOT; ?>/users/register">Inscription</a> -->
      <a href="<?php echo URLROOT; ?>/users/login">Connexion</a>
  </div>

  <div id="main">
      <span style="font-size:30px; color: white; cursor:pointer" onclick="openNav()">&#9776;&nbsp;</span>
      <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME;?></a>
 </div>
</navbar>