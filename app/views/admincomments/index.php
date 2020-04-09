<?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <main id="main-doc">  
    
        
    <h2 class="text-uppercase text-center text-dark  mb-5"> Modérer des commentaires</h2> 
      <h5 class="text-center text-light  mb-4"> Pour annuler le signalement ou supprimer un de ce commentaires cliquer sur  <span class="btn btn-outline-light "><i class="fas fa-eye"></i></span> </h5>
        
        <div class="container">
          
        <table class="table table-hover w-auto">
        <thead >
          <tr>
            <th class="col">Commentaire</th>
            <th class="col text-center">Date de commentaire</th>
            <th class="col text-center">Auteur de commentaire</th>
            <th class="col">Chapitre</th>
            <th class="col">Nombre de signalement</th>
            <th class="col text-center"> Modérer ce commentaire</th>
          </tr>
          </thead>
        <tbody>
        
         
          <tr> <?php foreach ($data['comments'] as $comment): ?>
            <td class="col"><?php echo ($comment->content); ?></td>
            <td class="col"><?php echo ($comment->date_comm); ?></td>
            <td class="col text-center"><?php echo ($comment->author); ?></td>
            <td class="col"><?php echo($comment->title); ?></td>            
            <td class="col">
            <div class="text-center"><?php echo ($comment->flag); ?></div>
            </td>
           
            <td class="col text-center"> <a href="<?php echo URLROOT; ?>/admincomments/show/<?php echo ($comment->comm_id); ?>" class="btn btn-outline-light "><i class="fas fa-eye"></i></a>

          
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
              </main>


 