<?php $this->title = 'Administration'; ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Panneau administration</h2>
            </div>
        </div>
    </div>
</div>

<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2>Articles</h2>
                
                <!-- bouton nouvel article -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                        <a href="../public/index.php?route=addArticle" class="btn btn-primary py-3 px-5">Nouvel article</a>
                        </div>
                    </div>
                </div>

                <!-- Tableau article -->
                <div class="table-responsive">
                    <table class="table  table-striped">
                        <tr class="bg-primary text-center">
                            <td>ID</td>
                            <td>TITRE</td>
                            <td>CONTENU</td>
                            <td>AUTEUR</td>
                            <td>DATE</td>
                            <td>ACTIONS</td>
                        </tr>
                        <?php
                        foreach ($articles as $article)
                        {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($article->getId());?></td>
                                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                                <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
                                <td><?= htmlspecialchars($article->getAuthor());?></td>
                                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                                <td>
                                    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                                    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <!-- FinTableau article -->

                <h2>Commentaires signalés</h2>
                <!-- Tableau commentaires signalés -->
                <div class="table-responsive">
                    <table class="table  table-striped">
                        <tr class="bg-primary text-center">
                            <td>ID</td>
                            <td>PSEUDO</td>
                            <td>MESSAGE</td>
                            <td>DATE</td>
                            <td>ACTIONS</td>
                        </tr>
                        <?php
                        foreach ($comments as $comment)
                        {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($comment->getId());?></td>
                                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                                <td>
                                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire </a>
                                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"> / Supprimer le commentaire</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <!-- FinTableau commentaires signalés -->

                <h2>Utilisateurs</h2>
                <!-- Tableau Utilisateurs -->
                <div class="table-responsive">
                    <table class="table  table-striped">
                        <tr class="bg-primary text-center">
                            <td>ID</td>
                            <td>PSEUDO</td>
                            <td>DATE</td>
                            <td>ROLE</td>
                            <td>ACTIONS</td>
                        </tr>
                        <?php
                        foreach ($users as $user)
                        {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($user->getId());?></td>
                                <td><?= htmlspecialchars($user->getPseudo());?></td>
                                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                                <td><?= htmlspecialchars($user->getRole());?></td>
                                <td>
                                    <?php
                                    if($user->getRole() != 'admin') {
                                    ?>
                                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                                    <?php }
                                    else {
                                        ?>
                                    Suppression impossible
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <!-- FinTableau Utilisateurs -->

            </div>
        </div>
    </div>
</div>

