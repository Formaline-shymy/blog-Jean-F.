  <?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <nav class="topnav">
      <div class="topnav-right">
            
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Se déconnecter</a>
            <!-- <a class="nav-link" href="#">Changer le mot de passe</a> -->
     
       
         
      </div>
    </nav>

    <nav id="navbar2">
      <table class="table">
          <tbody>
            <tr>
              <td><a class="nav-link" href="#Tab">Tableau de bord</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="#Adm">Administration</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="#Moder">Moderation</a></td>
            </tr>
            <tr>
              <td><a class="nav-link" href="<?php echo URLROOT; ?>">Retour au site</a></td>
            </tr>
          </tbody>    
      </table>
    </nav>

    <main id="main-doc">
      <div class ="container">
        <header>Profil d'administrateur </header>
        <section  id="Tab">
        <h2>Tableau de bord</h2> 
          <div class = 'hi'>Bonjour  <?php echo $_SESSION['name']; ?> !</div>
        </section>
        <section id='Adm'>
          <h2>Administration des posts</h2>    
              <form method="post">
                <textarea id="mytextarea">CHAPITRE</textarea>
              </form>
        </section>
        <section id='Moder'>
          <h2>Moderation des commentaires</h2>    
             
        </section>


    
      </div>
    </main>
