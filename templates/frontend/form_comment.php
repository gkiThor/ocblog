<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form class="p-8 bg-light" method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
    <div class="row">
        <div class="form-group">
            <label for="pseudo">Pseudo</label><br>
            <input class="form-control form-control-lg" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
            <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>

            <label for="content">Message</label><br>
            <textarea class="form-control form-control-lg" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
            <?= isset($errors['content']) ? $errors['content'] : ''; ?>
            <input class="btn btn-primary py-3 px-3" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
        </div>
    </div>
    
    
</form>
