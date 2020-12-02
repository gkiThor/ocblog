<?php $this->title = 'Listes'; ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Listes des blogs</h2>
                </div>

                <?= $this->session->show('add_article'); ?>
                <?= $this->session->show('edit_article'); ?>
                <?= $this->session->show('delete_article'); ?>
                <?= $this->session->show('add_comment'); ?>
                <?= $this->session->show('flag_comment'); ?>
                <?= $this->session->show('delete_comment'); ?>
                <?= $this->session->show('register'); ?>
                <?= $this->session->show('login'); ?>
                <?= $this->session->show('logout'); ?>
                <?= $this->session->show('delete_account'); ?>
            </div>

                    
            <?php
                if ($this->session->get('pseudo')) {
            ?>
            <!-- pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="../public/index.php?route=logout">Déconnexion</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="../public/index.php?route=profile">Profil</a>
                    </li>

                    <?php if($this->session->get('role') === 'admin') { ?>

                    <li class="page-item">
                        <a  class="page-link" href="../public/index.php?route=administration">Administration</a>
                    </li>

                    <?php } ?>

                    <li class="page-item">
                        <a class="page-link" href="../public/index.php?route=addArticle">Nouvel article</a> <br>
                    </li>
                </ul>
            </nav>
            <!-- FinPagination -->

            <?php
                } else {
            ?>

            <!-- pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="../public/index.php?route=register">Inscription</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="../public/index.php?route=login">Connexion</a>
                </li>
                </ul>
            </nav>
            <!-- FinPagination -->

            <?php
                }
            ?>

            <?php
                foreach ($articles as $article)
                {
            ?>

                <div class="post-entry-2 d-flex">
                    <div class="thumbnail order-md-2" style="background-image: url('meranda/images/chaletEtCaviar.png')">
                    </div>
                    <div class="contents order-md-1 pl-0">
                        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
                        <p class="mb-3"><?= htmlspecialchars($article->getContent());?></p>
                        <div class="post-meta">
                            <span class="d-block">Auteur : <?= htmlspecialchars($article->getAuthor());?></span>
                            <span class="date-read">Créé le : <?= htmlspecialchars($article->getCreatedAt());?> <span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
                <br>
            <?php
                }
            ?>

        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- site-section -->
