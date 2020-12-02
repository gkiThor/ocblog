<?php $this->title = 'Mon profil'; ?>

<!-- Titre de la page -->
<div class="site-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="= text-center">Profile</h2>
            </div>
        </div>

    </div>
</div>

<!-- Contenu de la page -->
<div class="site-section bg-light">
    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <table class="table  table-striped">
                    <tr class="bg-primary">
                        <td class="text-center">PSEUDONYME</td>
                        <td class="text-center">ID</td>
                    </tr>
                    <tr>
                        <td class="text-center"><?= $this->session->get('pseudo'); ?></td>
                        <td class="text-center"><?= $this->session->get('id'); ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
                        </li>
                    </ul>
                </nav>
                <!-- FinPagination -->
            </div>
        </div>
        

    </div><!-- Container -->
</div><!-- site-section bg-light -->

<!-- Lien de retour à l'accueil -->
<div class="site-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center"> 
                        <a href="../public/index.php">Retour à l'accueil</a> 
                </div>
            </div>
        </div>

    </div>
</div>


