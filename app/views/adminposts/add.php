 <?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <main id="main-doc">   
        <h2 class="text-uppercase text-white mt-0"><i class="fas fa-file-import"></i> Ecrire un nouveau chapitre</h2> 
             <form action="<?php echo URLROOT; ?>/adminposts/add" method="post" enctype="multipart/form-data">
                <div class="card card-body bg-light mt-2">
                  <div class="row mx-auto mb-2">
                      <div class="form-group mr-5">
                        <label for="title">Titre: <sup>*</sup></label>
                        <input id="title" type="text" name="title" class="form-control form-control-lg" required>
                      </div>
                     <div class="form-group ml-5"> 
                      <label for="date">Date: <sup>*</sup></label>
                      <input name="date" type="date" name="date" class="form-control form-control-lg" placeholder="Entrez la date"required>
                     </div>     
                  </div>   
                  <br><br>
                  <textarea id="mytextarea">  </textarea>
                  <input type="submit" class="btn btn-info btn-block mt-3" value="Publier">
                </div>    
            </form>   
    </main>

      
        
