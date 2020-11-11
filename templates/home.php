<?php $this->title = 'Accueil'; ?>
<div class="container">

    <div class="container">
        <h1>Developpeur Backend PHP/Symfony</h1>

        <div class="row">
            <div class="col">
            <h2>Photo</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
            <h2>SOULICHANH</h2>
            </div>
            <div class="col">
            <h2>Guillaume</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Je suis le développeur qu'il vous faut!</h3>
    </div>

    <p>un menu pour naviguer</p>
    <p>un formulaire de contact</p>
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
