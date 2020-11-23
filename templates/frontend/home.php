<?php $this->title = 'Accueil'; ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-section">
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
                                <img src="meranda/images/big_img_1.jpg" alt="Image" class="img-fluid">
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

                <a class="btn btn-primary py-3 px-5" href="../public/cv/CV_gsoulichanh.pdf">Télécharger mon CV</a>
                <p>lien réseaux sociaux</p>
                
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- site-section -->

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
