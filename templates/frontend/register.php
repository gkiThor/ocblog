<?php $this->title = "Inscription"; ?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <form method="post" action="../public/index.php?route=register">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="pseudo">Pseudo</label><br>
                            <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>" class="form-control form-control-lg"><br>
                            <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Mot de passe</label><br>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"><br>
                            <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" value="Inscription" id="submit" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
   
                </form>
                
                <div class="text-center"> 
                    <a href="../public/index.php">Retour à l'accueil</a> 
                </div> 
            </div>        
        </div>
    </div>
</div>
