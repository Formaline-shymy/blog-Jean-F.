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
    selector: 'textarea#format-custom',
  language : 'fr_FR',
 
  
  height: 500,
  plugins: 'table wordcount',
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  content_style: '.left { text-align: left; } ' +
    'img.left { float: left; } ' +
    'table.left { float: left; } ' +
    '.right { text-align: right; } ' +
    'img.right { float: right; } ' +
    'table.right { float: right; } ' +
    '.center { text-align: center; } ' +
    'img.center { display: block; margin: 0 auto; } ' +
    'table.center { display: block; margin: 0 auto; } ' +
    '.full { text-align: justify; } ' +
    'img.full { display: block; margin: 0 auto; } ' +
    'table.full { display: block; margin: 0 auto; } ' +
    '.bold { font-weight: bold; } ' +
    '.italic { font-style: italic; } ' +
    '.underline { text-decoration: underline; } ' +
    '.example1 {} ' +
    '.tablerow1 { background-color: #D3D3D3; }',
  formats: {
    alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'left' },
    aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center' },
    alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'right' },
    alignfull: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'full' },
    bold: { inline: 'span', classes: 'bold' },
    italic: { inline: 'span', classes: 'italic' },
    underline: { inline: 'span', classes: 'underline', exact: true },
    strikethrough: { inline: 'del' },
    customformat: { inline: 'span', styles: { color: '#00ff00', fontSize: '20px' }, attributes: { title: 'My custom format'} , classes: 'example1'}
  },
  style_formats: [
    { title: 'Custom format', format: 'customformat' },
    { title: 'Align left', format: 'alignleft' },
    { title: 'Align center', format: 'aligncenter' },
    { title: 'Align right', format: 'alignright' },
    { title: 'Align full', format: 'alignfull' },
    { title: 'Bold text', inline: 'strong' },
    { title: 'Red text', inline: 'span', styles: { color: '#ff0000' } },
    { title: 'Red header', block: 'h1', styles: { color: '#ff0000' } },
    { title: 'Badge', inline: 'span', styles: { display: 'inline-block', border: '1px solid #2276d2', 'border-radius': '5px', padding: '2px 5px', margin: '0 2px', color: '#2276d2' } },
    { title: 'Table row 1', selector: 'tr', classes: 'tablerow1' },
    { title: 'Image formats' },
    { title: 'Image Left', selector: 'img', styles: { 'float': 'left', 'margin': '0 10px 0 10px' } },
    { title: 'Image Right', selector: 'img', styles: { 'float': 'right', 'margin': '0 0 10px 10px' } },
  ]
});

  </script>



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
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/admin/index">Profil admin</a></td>
              </tr>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/adminposts/index">Tableau de bord</a></td>
              </tr>
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/adminposts/add">Ajouter un chapitre</a></td>
              </tr>
              </tr>         
              <tr>
                <td><a class="nav-link" href="<?php echo URLROOT; ?>/admincomments/index">Modérer des commentaires</a></td>
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




