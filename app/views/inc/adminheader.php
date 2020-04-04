<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
   integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
  
   <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <title> Blog : Profil d'Admin</title>
  <meta name="description" content="Blog: Administration" />
  
  <script src="https://cdn.tiny.cloud/1/fzc9m4sl280q4anrxhe3qwryw7j89uok7zpg83alck8qkh01/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  tinymce.init({
  selector: '#format-custom',
  language : 'fr_FR',
  block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',
  toolbar: 'fontsizeselect',
  fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
  indentation : '20pt',
  height: 500,
  });

  </script>
 </head>
<body>
<nav class ="topnav fixed-top  navbar-expand-lg">
    
    <div class ="topnav-right">
    
      <div class ="navbar-nav ">
        <a class ="nav-item nav-link no-hover"> <div class = 'hi text-white text-uppercase font-weight-bold'>Bonjour  <?php echo $_SESSION['name']; ?> !</div></a></a>
        <a class ="nav-item nav-link" href="<?php echo URLROOT; ?>/users/logout">Se déconnecter</a>
        <!-- <a class ="nav-item nav-link  href="#">Changer le mot de passe</a> -->
      </div>
    </div>
   </nav>
  
  
      <nav id="navbar2">
        <table class="table">
            <tbody>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/admin/index">Tableau de bord</a></td>
              </tr>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/adminposts/index">Liste de chapitres</a></td>
              </tr>
              <!-- <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/adminposts/add">Ajouter un chapitre</a></td>
              </tr> -->
              </tr>         
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/admincomments/index">Liste des commentaires</a></td>
              </tr>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/users/register" > Inscrir un nouveau utilisateur</a>
              </tr>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>">Retourner au site</a></td>
              </tr>
            </tbody>    
        </table>
      </nav>




