<?php require APPROOT . '/views/inc/header.php'; ?>
<div class= "my-5">
  <section id="biographie" >
    <div class="py-1"> 
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
                  <p class="text-justify"><?php echo $data['description']; ?></p>
              </div>
              <div class= "postlink"><a href="<?php echo URLROOT; ?>/about">Lire plus
              <i class="fab fa-readme"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
 </section>

 <section id="latest-book" >
  <div class="py-5"> 
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-6">
            <div class="wrapper">
              <div class="wrapper-info box">
                <div class="d-flex">
                  <div>
                    <h2 class="sub-title color-light-gray text-center text-uppercase">Nouveau thriller en ligne <br> épisode par épisode!</h2> <br>
                    <h3 class="heading-title"><?php echo $data['booktitle']; ?></h3>
                  </div>
                </div>
                <h3 class="summary">Sommaire: </h3>
                <p class="text-justify"><?php echo $data['sommaire']; ?></p>
              </div>
              <div class= "postlink"><a href="<?php echo URLROOT; ?>/posts/index">Lire les chapitres
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
</div>
<?php require APPROOT . '/views/inc/footer.php';?>

