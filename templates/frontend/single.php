<?php $this->title = 'Article'; ?>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div>
                    <h2><?= htmlspecialchars($article->getTitle());?></h2>
                    <p><?= htmlspecialchars($article->getContent());?></p>
                    <p><?= htmlspecialchars($article->getAuthor());?></p>
                    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                </div>
                <br>
                <div class="actions">
                    <a class="btn btn-primary py-3 px-3" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a class="btn btn-primary py-3 px-3" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </div>
                <br>
                <div> 
                        <a href="../public/index.php">Retour à l'accueil</a> 
                        </br>
                </div>
            </div>


            <div class="col-lg-6">
                <div id="comments" class="text-left" style="margin-left: 50px">
                        <h3>Ajouter un commentaire</h3>
                        <?php include('form_comment.php'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                      <h2 class="mb-5">Commentaires</h2>
                    </div>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="comment-body">
                                <?php
                                    foreach ($comments as $comment)
                                    {
                                        ?>
                                        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
                                        <p><?= htmlspecialchars($comment->getContent());?></p>
                                        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
                                        <?php
                                        if($comment->isFlag()) {
                                            ?>
                                            <p>Ce commentaire a déjà été signalé</p>
                                            <?php
                                        } else {
                                            ?>
                                            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>"  class="reply">Signaler le commentaire</a></p>
                                            <?php
                                        }
                                        ?>
                                        <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"  class="reply">Supprimer le commentaire</a></p>
                                        <br>
                                        <?php
                                    }
                                ?>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
            

           
        </div>
    </div>
</div>    


