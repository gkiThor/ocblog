<?php $this->title = 'Mon profil'; ?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5 text-center" >
                    <p>Profile</p>
                </div>
                <?= $this->session->show('update_password'); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <div class="section-title mb-5">
                            <p>Pseudonyme :</p>
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <h2><?= $this->session->get('pseudo'); ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <div class="section-title mb-5">
                            <p>Id :</p>
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <p><?= $this->session->get('id'); ?></p>
                    </div>
                </div>
                    
                    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
                    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
                </div>
                <br>
                <div class="text-center"> 
                    <a href="../public/index.php">Retour à l'accueil</a> 
                </div>
            </div>
        </div>
    </div>
</div>


