<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>" class="form-control form-control-lg"><br>
            <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        </div> 
    </div>  
     
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="content">Contenu</label><br>
            <textarea id="content" name="content" class="form-control form-control-lg"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
            <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        </div>
    </div>

    <div class="row">
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit" class="btn btn-primary py-3 px-5">
    </div>
    
</form>
