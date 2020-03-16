<?php require APPROOT . '/views/inc/header.php'; ?>
<section id="biographie" >
  <div class="pt-5"> 
      <div class="container">
        <div class="row justify-content-around"> 
          <div class="col-md-4">
          <img src="public/img/man.jpg" alt="photo" class="figure-img img-fluid rounded"/>
          </div>
          <div class="col-md-6">
            <div class="wrapper">
              <div class="wrapper-info box1">
                <div class="d-flex">
                  <div>
                    <h2 class="sub-title color-gray text-center text-uppercase">Biographie</h2> <br>
                  </div>
                </div>
                  <p class="text-justify"><?php echo $data['description2']; ?></p>
              </div>
              <div class= "postlink"><a href="<?php echo URLROOT; ?>/pages/about">Lire plus
              <i class="fab fa-readme"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
 </section>

<section id="latest-book" >
  <div class="pt-5"> 
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-6">
            <div class="wrapper">
              <div class="wrapper-info box1">
                <div class="d-flex">
                  <div>
                    <h2 class="sub-title color-light-gray text-center text-uppercase">Nouveau thriller en ligne <br> Episode par épisode!</h2> <br>
                    <h3 class="heading-title">Un billet simple pour l'Alaska</h3>
                  </div>
                </div>
                <h3 class="summary">Sommaire: </h3>
                <p class="text-justify"><?php echo $data['description']; ?></p>
              </div>
              <div class= "postlink"><a href="<?php echo URLROOT; ?>/posts/listposts">Lire les chapitres
              <i class="fab fa-readme"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          <img src="public/img/roman.jpg" alt="book cover" class="figure-img img-fluid rounded ">
          </div>
        </div>
      </div>
  </div>
 </section>

  <?php require APPROOT . '/views/inc/footer.php';?>

