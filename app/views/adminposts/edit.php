<?php require APPROOT . '/views/inc/adminheader.php'; ?>     
<main id="main-doc">   
        <h2 class="text-uppercase text-center text-white mt-0 mb-3"><i class="fas fa-exchange-alt"></i>  Modifier le chapitre</h2> 
     
          <form method="post">
            <div class="card card-body bg-light mt-2">
                <div class="row mx-auto mb-2">
                  <div class="form-group mr-5">
                    <label for="title">Titre: <sup>*</sup></label>
                    <input id="title" type="text" name="title" class="form-control form-control-lg">    
                  </div>
                  <div class="form-group mr-5">
                    <label for="date">Date: <sup>*</sup></label>
                    <input id="date" type="date" name="title" class="form-control form-control-lg">    
                  </div>
                  
                <br><br>
                </div>
                <div class="form-group">
                <textarea id="mytextarea">  </textarea>
                </div> 
                
                <div class="row">
                  <div class="col">
                    <input type="submit" class="btn btn-info btn-block mt-3" value="Modifier ce chapitre ">
                  </div>
                  <div class="col">
                    <input type="submit" class="btn btn-danger btn-block mt-3" value="Supprimer ce chapitre">
                  </div>
                </div>
                     
            </div>
            </div> </div>   
          </form>   
          <br>
</main>