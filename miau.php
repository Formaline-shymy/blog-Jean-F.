<h3>Commentaires</h3>
        <div class="left-block">
            <?php if ($this->nettoyer($nbCommentaires) >= 1) { ?>

                <?php foreach ($commentaires as $commentaire): ?>
                    <form method="post" action="commentaire/signaler/<?= $commentaire['id'] ?>">
                        <p>
                            <input type="hidden" name="id_comment" value="">
                            <input type="hidden" name="id_episode" value="">
                            <span class="pseudo">
                            <i class="fa fa-pencil"
                               aria-hidden="true"></i>
                                <?= $this->nettoyer($commentaire['auteur']) ?>
                        </span>
                            <span class="comment-date">
                            <?= $this->nettoyer($commentaire['date']) ?>
                        </span>
                            <span class="comment-signaler">
                            <a href="<?= "commentaire/signaler/" . $this->nettoyer($commentaire['id']) ?>">Signaler le commentaire</a>
                        </span>
                        <p>
                        <span>
                            <?= $this->nettoyer($commentaire['contenu']) ?>
                        </span>
                        </p>
                        </p>
                    </form>
                <?php endforeach; ?>

            <?php } else { ?>
                <p>
                        <span>
                            Il n'y a pas encore de commentaire ...
                        </span>
                </p>
            <?php } ?>
       