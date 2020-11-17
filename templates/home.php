<?php $this->title = 'Accueil'; ?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-left">
                                <div class="section-title mb-5">
                                <h2>SOULICHANH Guillaume</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                <img src="images/big_img_1.jpg" alt="Image" class="img-fluid">
                                </p>
                            </div>
                            <div class="col-lg-6 pl-md-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui obcaecati eaque odio, alias nulla quae, aliquid, rerum consequuntur, quaerat blanditiis cupiditate eos doloribus dolor debitis! Ex eius deleniti, soluta!</p>
                                <p>Facilis sit molestiae deserunt quo corporis culpa dolorum animi architecto illum sapiente. Asperiores, placeat animi distinctio provident adipisci.</p>
                                <ul class="ul-check list-unstyled success mt-5">
                                    <li>Lorem ipsum dolor sit.</li>
                                    <li>Cupiditate dolores rerum, consequatur!</li>
                                    <li>Quia dolor molestias voluptatem?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <h3>Je suis le développeur qu'il vous faut!</h3>
                </div>

                <p>un lien vers le CV en pdf</p>
                <p>lien réseaux sociaux</p>
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
                <?php
                if ($this->session->get('pseudo')) {
                    ?>
                    <a href="../public/index.php?route=logout">Déconnexion</a>
                    <a href="../public/index.php?route=profile">Profil</a>
                    <?php if($this->session->get('role') === 'admin') { ?>
                        <a href="../public/index.php?route=administration">Administration</a>
                    <?php } ?>
                    <a href="../public/index.php?route=addArticle">Nouvel article</a>
                    <?php
                } else {
                    ?>
                    <a href="../public/index.php?route=register">Inscription</a>
                    <a href="../public/index.php?route=login">Connexion</a>
                    <?php
                }
                ?>
                <?php
                foreach ($articles as $article)
                {
                    ?>
                    <div>
                        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
                        <p><?= htmlspecialchars($article->getContent());?></p>
                        <p><?= htmlspecialchars($article->getAuthor());?></p>
                        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                    </div>
                    <br>
                    <?php
                }
                ?>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- site-section bg-light -->
