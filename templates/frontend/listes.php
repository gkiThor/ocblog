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

            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('images/img_h_4.jpg')"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

        
            <?php
                if ($this->session->get('pseudo')) {
            ?>
                <a href="../public/index.php?route=logout">Déconnexion</a>
                <a href="../public/index.php?route=profile">Profil</a>
            <?php if($this->session->get('role') === 'admin') { ?>
                <a href="../public/index.php?route=administration">Administration</a>
            <?php } ?>
                <a href="../public/index.php?route=addArticle">Nouvel article</a> <br>
            <?php
                } else {
            ?>
            <div class="row">
                <a class="btn btn-primary" href="../public/index.php?route=register">Inscription</a>
                <a class="btn btn-primary py-1 px-2" href="../public/index.php?route=login">Connexion</a> <br>
            </div>
            <?php
                }
            ?>

            <?php
                foreach ($articles as $article)
                {
            ?>

                <div class="post-entry-2 d-flex">
                <div class="thumbnail order-md-2" style="background-image: url('images/img_h_4.jpg')"></div>
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

        </div>
    </div>
</div>
