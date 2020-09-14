<?php
// //On inclut le fichier dont on a besoin (ici à la racine de notre site)
// require '../src/DAO/DAO.php';
// //Ne pas oublier d'ajouter le fichier Article.php
// require '../src/DAO/ArticleDAO.php';

//require '../vendor/autoload.php';

use App\src\DAO\ArticleDAO;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <?php
    
    while($article = $articles->fetch())
    {
        ?>
        <div>
            <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->id);?>"><?= htmlspecialchars($article->title);?></a></h2>    
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>
        <br>
        <?php
    }
    $articles->closeCursor();
    ?>
</div>
</body>
</html>