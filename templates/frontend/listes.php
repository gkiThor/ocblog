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
        <div class="site-navbar  site-navbar-target d-none pl-0 d-lg-block">
        <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                <a href="../public/index.php?route=logout">Déconnexion</a>
                </li>
                <li>
                <a href="../public/index.php?route=profile">Profil</a>
                </li>

                
            <?php if($this->session->get('role') === 'admin') { ?>
                <li>
                <a href="../public/index.php?route=administration">Administration</a>
                </li>
            <?php } ?>

                <li>
                <a href="../public/index.php?route=addArticle">Nouvel article</a> <br>
                </li>
                </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>
        </div>
            <?php
                } else {
            ?>
            <div class="site-navbar site-navbar-target d-none pl-0 d-lg-block">
                <div class="container">
                    <div class="d-flex align-items-center">
                    
                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="active">
                                        <a href="../public/index.php?route=register">Inscription</a>
                                    </li>
                                    <li>
                                        <a href="../public/index.php?route=login">Connexion</a> <br>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            </br>

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

        </div>
    </div>
</div>
