<?php  
require 'administrateur/adminConnexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php'; ?>
</head>

<body>
  <?php include 'header.php'; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container bd-success">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Bienvenue sur  <span>GGI+ <img src="asse"> </span> </h1>
            <h2>Gestion Du Groupe INTEC</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/intecLogo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
          </g>
          <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
              </g>
            </svg>

          </section><!-- End Hero -->

          <!--Pannel de connexion -->
          <div class="container">
            <div class="row">
             <div class="col-lg-6 d-flex flex-column justify-content-center">
              <div class="card mb-1">
                      <div class="">
                        <p class="bg-light  border-bottom fs-4 d-flex justify-content-center">Espace Administration</p><br>
                      </div>
                <div class="card-body">
                      
                  <div class="pt-4 pb-2">
                    <div class="col-lg-12 d-flex justify-content-center">
                      <div class="panel-heading"> 
                                            
                        <p>
                          <b>
                            <?php  
                              if (isset($erreur)) {
                                echo $erreur;
                              }
                            ?>
                          </b>
                        </p>  
                      </div>
                      <div class="form-group col-md-offset-1">                   
                        <img src="assets/img/R.png" alt="Logo INTEC">    
                      </div>
                    </div>
                    <form class="row g-3 needs-validation" method="POST">
                      <h5>
                        Veuillez renseigner ces champs 
                      </h5>
                      <div class="col-12">
                        <label for="" class="form-label"><b> Identifiant </b></label>
                        <div class="input-group has-validation">
                          <input type="tel" name="email" class="form-control" id="" required>
                          <div class="invalid-feedback">S'il vous plait entrer votre Identifiant.</div>
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="" class="form-label"><b> Mot de passe </b></label>
                        <div class="input-group has-validation">
                          <input type="password" name="password" class="form-control" id="" required>
                          <div class="invalid-feedback">S'il vous plait entrer votre mot de passe.</div>
                        </div>
                      </div>
                      <!--<div class="col-12">
                        <label for="" class="form-label"><b> Quelle est votre site ? </b></label>
                        <select name="choix" class="form-control">
                          <option>-- Veuillez selectionner --</option>
                          <option value="aci">ACI</option>
                          <option value="hippodromme">Hippodromme</option>
                          <option value="bacodjicoroni">Bacodjicoroni</option>
                        </select>
                      </div> -->
                      <div class="col-12">
                        <button name="adminConnect" class="btn btn-success w-100" type="submit">Connexion</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex flex-column mt-3 ">
              <div class="card mb-1">
              <div class="">
                        <p class="bg-light  border-bottom fs-4 d-flex justify-content-center">Espace Etudiant</p><br>
                      </div>
                <div class="card-body">
                  <div class="">
                    <div class="col-lg-12 d-flex flex-column justify-content-center">
                   
                   <div class="form-group col-md-offset-1 d-flex justify-content-center">                   
                    <img src="assets/img/R.png" alt="Logo INTEC">    
                  </div>
                  <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">

                    <h5>
                      Veuillez renseigner ces champs 
                    </h5>
                    <div class="col-12">
                      <label for="" class="form-label"><b>Matricule</b></label>
                      <div class="input-group has-validation">

                        <input type="text" name="" class="form-control" id="" required>
                        <div class="invalid-feedback">S'il vous plait entrer votre matricule.</div>
                      </div>
                    </div>

                    <div class="col-12" class="form-group">Mot de passe</b></label>
                      <div class="input-group has-validation">
                        <input type="text" name="" class="form-control" id="" required>
                        <div class="invalid-feedback">S'il vous plait entrer votre mot de passe</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="" class="form-label"><b> Votre filiere</b></label>
                      <select name="" class="form-control">
                        <option>-- Veuillez selectionner --</option>
                        <option value="">IG1</option>
                        <option value="">IG2</option>
                        <option value="">PDI</option>
                      </select>
                      <div class="invalid-feedback">S'il vous plait entrer votre filiere.</div>
                    </div>  <br>
                    <div class="col-12">
                      <button name="" class="btn btn-primary w-100" type="submit">Connexion</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--END Pannel de connexion -->


    <main id="main">
      <!-- Contact Section -->
      <?php include 'contact.php'; ?>
      <!-- END Contact Section -->
    </main><!-- End #main -->
    <!-- Script Section -->
    <?php include 'javascript.php'; ?>
    <!-- END Script Section -->
  </body>

  </html>