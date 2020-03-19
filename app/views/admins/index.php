  <?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <nav class="topnav">
      <div class="topnav-right">
          <?php if (isset ($_SESSION['user_id'])) :?>
            <a class = "link" href="<?php echo URLROOT; ?>/pages/index">Se déconnecter</a>
          <?php endif;?>
          <a class = "link" href="<?php echo URLROOT; ?>/index.php">Changer le mot de passe</a>
      </div>
    </nav>

    <nav id="navbar2">
      <table class="table">
          <tbody>
            <tr>
              <td><a class="nav-link" href="#Tableau de bord">Tableau de bord</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="#Administration des posts">Administration</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="#Moderation des commentaires">Moderation</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="#Autres chose">Autres chose</a></td>
            </tr>
          </tbody>    
      </table>
    </nav>

    <main id="main-doc">
      <div class ="container id=table ">
        <header>Profil d'administrateur </header>
        <p> Bienvenue</p>
      </div>
    </main>
