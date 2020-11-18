<?php $this->title = 'Modifier mot de passe'; ?>

<br>




<div class="site-section bg-light">
    <div class="container">
        <div class="row">
        
        <div class="col-lg-12">
            <div class="section-title mb-5 text-center" >
                <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
            </div>
        </div>

            <div class="col-lg-12">
                <form method="post" action="../public/index.php?route=updatePassword">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="password">Mot de passe</label><br>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"><br>
                            
                        </div>
                    </div>


                    <div class="row">
                        <input type="submit" value="Mettre à jour" id="submit" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
   
                </form>
                
                <div class="text-center"> 
                    <a href="../public/index.php">Retour à l'accueil</a> 
                </div> 
            </div>        
        </div>
    </div>
</div>
