<?php $this->title = 'Accueil'; ?>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                
                    <div class="container">
                        <div class="row">
                                <div class="col-12 text-center">
                                    <div class="section-title mb-5">
                                        <h2>Bienvenue</h2>
                                        <p>Je me présente SOULICHANH Guillaume 39 ans.</br>
                                        Actuellement en formation à distance avec OpenClassroom depuis 2019.</br> 
                                        Pour acquérir le titre de développeur PHP/Symfony.</p>
                                    </div>
                                </div>
                        </div>
                    
                    </div>
            

            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- site-section -->


<!-- Compétences Formations Langages -->
<!-- site-section compétences -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                        <th scope="col">Mes compétences</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">UML</th>
                        </tr>
                        <tr>
                            <th scope="row">MERISE</th>
                        </tr>
                        <tr>
                            <th scope="row">MySQL Workbench</th>
                        </tr>
                        <tr>
                            <th scope="row">WordPress</th>
                        </tr>
                        <tr>
                            <th scope="row">Visual studio 2017/Code</th>
                        </tr>
                        <tr>
                            <th scope="row">Eclipse</th>
                        </tr>
                        <tr>
                            <th scope="row">Code::Blocks</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- site-section langages -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                        <th scope="col">Les langages informatiques</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C/C++</th>
                        </tr>
                        <tr>
                            <th scope="row">C#/VB.NET</th>
                        </tr>
                        <tr>
                            <th scope="row">Java</th>
                        </tr>
                        <tr>
                            <th scope="row">PHP</th>
                        </tr>
                        <tr>
                            <th scope="row">SQL</th>
                        </tr>
                        <tr>
                            <th scope="row">HTML5/CSS3</th>
                        </tr>
                        <tr>
                            <th scope="row">JavaScript</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- site-section formations -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                        <th scope="col">Mes formations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Développeur d'application PHP/Symfony</th>
                        </tr>
                        <tr>
                            <th scope="row">Responsable en ingénirie des logiciels</th>
                        </tr>
                        <tr>
                            <th scope="row">Analyste Programmeur junior C/C++, Java</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- formulaire de contact -->
<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5">
                <h2>Pour me contacter remplissez ce formulaire</h2>
                </div>
                <form method="post" action="../public/index.php?route=contact">
                
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="fname">Nom</label>
                            <input type="text" id="fname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Prénom</label>
                            <input type="text" id="lname" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="eaddress">Addresse email</label>
                            <input type="text" id="eaddress" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Envoyez" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>
                
                </form>
          </div>      
        </div> 
    </div>
</div>
