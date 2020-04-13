<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
  <div class="col-md-5 mx-auto">
      <a href="<?php echo URLROOT; ?>" class="btn btn-light mt-5"><i class="fa fa-backward"></i> Retour au site</a>
      <div class="card card-body bg-light mt-5">
        <h3 class="newsletter text-center">NEWSLETTER</h3> 
        <p class="newsletterdescription text-center">Dernières parutions, événements à venir, bonus, dédicaces... Recevez toutes mes actualités en vous inscrivant à la newsletter:</p>
            <form method="post">
                <div class="form-group">
                   <label for="name" >Votre prénom: <sup>*</sup></label>
                   <input type="text" name="name" class="form-control form-control-lg" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre adresse mail: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg"required> 
                </div>
                <div class="row">
                    <div class="col">
                    <input type="submit" value="Envoyer" class="btn btn-info btn-block">
                    </div>
                </div>
            </form>
    </div>
  </div>
</div>    
<?php require APPROOT . '/views/inc/footer.php'; ?>
