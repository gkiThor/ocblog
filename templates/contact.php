<?php $this->title = "Contact"; ?>

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
                      <div class="col-md-6 form-group">
                          <label for="eaddress">Addresse email</label>
                          <input type="text" id="eaddress" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel">Téléphone</label>
                          <input type="text" id="tel" class="form-control form-control-lg">
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