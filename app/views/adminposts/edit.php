<?php require APPROOT . '/views/inc/adminheader.php'; ?>     
<header id="admin-main-header" class="py-2 bg-light text-dark">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <h4>Modifier le chapitre</h4>
                    </div>
                  </div>
                </div>
              </header>
            <form method="post">
                  <div class="card card-body bg-light mt-3">
                    <div class="row mx-auto mb-3">
                    
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
                      <div class="btn-group ">
                         <input type="submit" class="btn btn-info mr-5 mt-3" value="Modifier">
                         <input type="submit" class="btn btn-danger ml-5 mt-3" value="Supprimer">
                      </div>
                  </div>    
            </form>   
                      <br>
                      </div>

                    <hr>