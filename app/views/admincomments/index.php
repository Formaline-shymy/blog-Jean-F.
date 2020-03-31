<?php require APPROOT . '/views/inc/adminheader.php'; ?>
    <main id="main-doc">  
    
        
    <h2 class="text-uppercase text-center text-dark  mb-5"> Modérer des commentaires</h2> 
        
        <div class="container">
          
        <table class="table table-hover w-auto">
        <thead >
          <tr>
            <th class="col">Commentaire</th>
            <th class="col">Author</th>
            <th class="col">Chapitre</th>
            <th class="col">Signalement</th>
            <th class="col"> Modérer</th>
          </tr>
          </thead>
        <tbody>
        
         
          <tr> <?php foreach ($data['comments'] as $comment): ?>
            <td class="col"><?php echo htmlspecialchars($comment->content); ?></td>
            <td class="col"><?php echo htmlspecialchars($comment->author); ?></td>
            <td class="col"><?php echo htmlspecialchars($comment->title); ?></td>            
            <td class="col">e</td>
           
            <td class="col"> <a href="<?php echo URLROOT; ?>/admincomments/show/<?php echo htmlspecialchars($comment->comm_id); ?>" class="btn btn-outline-light"><i class="fas fa-eye"></i></a>

          
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
              </main>


    <!-- <?php echo $data['comm_id']; ?> -->