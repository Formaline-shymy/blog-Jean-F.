<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-5 mx-auto">
      <div class="card card-body bg-light mt-5">
         <h3>Connexion</h3> 
         <p>Pour vous connecter, merci de remplir tous les champs obligatoires:</p>

        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="form-group">
            <label for="nick">Votre identifiant: <sup>*</sup></label>
            <input type="text" name="nick" class="form-control form-control-lg <?php echo (!empty($data['nick_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nick']; ?>">
            <span class="invalid-feedback"><?php echo $data['nick_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Votre mot de passe: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Se connecter" class="btn btn-info btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
