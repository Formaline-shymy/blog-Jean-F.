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
  <title> Blog : Administration</title>
  <meta name="description" content="Blog: Administration" />
  
  <script src="https://cdn.tiny.cloud/1/fzc9m4sl280q4anrxhe3qwryw7j89uok7zpg83alck8qkh01/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
    selector: 'textarea#mytextarea',
    language : 'fr_FR',
     height: 400,
      plugins: 'colorpicker image emoticons textcolor link media',
      paste_data_images: true,
      toolbar: 'insertfile | formatselect | bold italic strikethrough forecolor backcolor | link | image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat ',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ],
      paste_data_images: true,
      image_advtab: true,
    file_picker_callback: function(callback, value, meta) {
      if (meta.filetype == 'image') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };
          reader.readAsDataURL(file);
        });
      }
    }

    });

    </script>
 </head>
<body>




