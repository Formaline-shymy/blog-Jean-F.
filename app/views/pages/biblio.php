<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container ">
  <div class="pl-5">
	<h1 class="text-left mb-5">Tous mes romans</h1>
	<section id="books" >
		<div class="containerbio">
			<div class="row">
				<input type="radio" id="reset" name="novel" />
				<label class="bib" for="reset">TOUT</label>

				<input type="radio" id="thriller" name="novel"/>
				<label class="bib" for="thriller">THRILLER</label>

				<input type="radio" id="s-f" name="novel" />
				<label class="bib" for="s-f">S-F</label>
		
				<div class="tile s-f col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5"> <img src="img/1.jpg" alt="book cover" class="figure-img img-fluid rounded"></div>
				<div class="tile thriller col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5"><img src="img/2.jpg" alt="book cover" class="figure-img img-fluid rounded"></div>
				<div class="tile thriller col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5"><img src="img/3.jpg" alt="book cover" class="figure-img img-fluid rounded"> </div>     
				<div class="tile s-f col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5 mb-5"><img src="img/4.jpg" alt="book cover" class="figure-img img-fluid rounded"></div>
				<div class="tile s-f col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5 mb-5"><img src="img/5.jpg" alt="book cover" class="figure-img img-fluid rounded"></div>
				<div class="tile thriller col-xs-12 col-sm-6 col-md-3 col-lg-3 ml-5 mb-5"><img src="img/6.jpg" alt="book cover" class="figure-img img-fluid rounded"> </div> 
			</div>    
		</div> 
    </section>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>
 

