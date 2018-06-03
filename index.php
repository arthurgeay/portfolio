<?php session_start();
require_once('parameters.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Arthur Geay. Développeur web PHP/Symfony & Chef de projet">
    <meta name="keywords" content="developpeur, web, developpeur web, arthur geay, Arthur Geay, php, sql, symfony, javascript, bootstrap, gestion de projet, freelance">
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/circle.css">
    <title>Portfolio - Arthur Geay</title>
  </head>
  <body id="page-top" class="overflow-x">
      <header>
        <div id="background">
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="#page-top">Arthur Geay</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link" href="#about">A propos</a>
                  </li>
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link" href="#resume">Mon parcours</a>
                  </li>
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link" href="#skills">Compétences</a>
                  </li>
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link" href="#project">Réalisations</a>
                  </li>
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div id="socials" class="text-center">
            <h1>Arthur Geay</h1>
            <h3>Etudiant & Développeur web</h3>
            <div id="icons">
              <a class="icon-social" href="https://linkedin.com/in/arthur-geay"><i id="linkedin-icon"class="fab fa-linkedin" style="font-size: 2em;"></i></a>
              <a class="icon-social" href="https://github.com/arthurgeay"><i id="github-icon" class="fab fa-github-square" style="font-size: 2em;"></i></a>
              <a class="icon-social" href="https://twitter.com/arthur_geay"><i id="twitter-icon" class="fab fa-twitter-square" style="font-size: 2em;"></i></a>
            </div>
            <img class="rounded-circle profile-img" src="img/profile.jpeg" alt="Photo de profil" width="200px" />
          </div>
        </div>

      </header>

      <div class="container">
        <div class="row">
          <section id="about" class="col-md-12">
            <h2 class="text-center">A propos</h2>
            <hr>
            <p class="text-center text-justify colored">Passionné d'informatique et de nouvelles technologies, mon projet professionnel s'oriente vers les métiers du web<br />
            et plus particulièrement celui de développeur web Backend.</p>
            <p class="text-center text-justify">En parallèle de mes études, je suis <strong>développeur web Freelance</strong> (depuis 2018). Je suis à l'écoute de vos propositions pour des <strong>missions de développement web</strong>.</p>

            <div id="infos-hobbies" class="row">
              <div id="table-info" class="col-lg-6">
                <h3 class="text-center">Informations personnelles</h3>
                <table class="table infos-list">
                  <tr>
                    <th class="colored">Date de naissance :</th>
                    <td>01/09/1997</td>
                  </tr>
                  <tr>
                    <th class="colored">Adresse e-mail :</th>
                    <td><a href="mailto:arthurgeay.contact@gmail.com">arthurgeay.contact@gmail.com</a></td>
                  </tr>
                  <tr>
                    <th class="colored">Site web :</th>
                    <td><a href="https://arthurgeay.fr">arthurgeay.fr</a></td>
                  </tr>

                </table>

                <p class="text-center"><a href="download/CV.pdf" class="btn btn-primary" alt="Télécharger le CV"><i class="fas fa-download"></i> Télécharger mon CV</a></p>
              </div>
              <div class="col-lg-6 text-center">
                <h3 class="text-center">Hobbies & centres d'intérêts</h3>
                <div id="list-hobbies">
                  <i class="fas fa-gamepad fa-5x circle-icon"></i>
                  <i class="fas fa-headphones fa-6x circle-icon"></i>
                  <i class="fas fa-film fa-6x circle-icon"></i><br />
                  <i class="fab fa-apple fa-8x circle-icon"></i>
                  <i class="fab fa-linux fa-7x circle-icon"></i>
                  <i class="fas fa-coffee fa-5x circle-icon"></i>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <section id="resume" class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Parcours</h2>
              <hr>

              <ul class="timeline">
                <li><div class="tltitle"><i class="fas fa-briefcase"></i> Expériences</div></li>

                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Développeur web Freelance</h4>
                      <p>Développeur PHP/Symfony <span style="color: rgb(230, 77, 67);">•</span> Mai 2016 - Aujourd'hui</p>
                    </div>
                    <div class="tl-body">
                      <p>Création d'une auto-entreprise de développement web.</p>
                      <p><strong>Les missions : </strong></p>
                      <p> • Car Manager - Mai 2018 : <br />
                      Développement d'une application web destinée à gérer la flotte de véhicule des sociétés Duotech, Satelix et ARF.</p>
                    </div>
                  </div>
                </li>

                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Réparateur de smartphone</h4>
                      <p>Online Repair <span style="color: rgb(230, 77, 67);">•</span> Septembre 2016 - Avril 2017</p>
                    </div>
                    <div class="tl-body">
                      <p>Création d'une auto-entreprise de réparation de smartphone avec une boutique en ligne.</p>
                      <p>Les missions étaient principalement des réparations de smartphones (majoritairement des iPhones) qui avaient des problèmes de batterie et/ou d'écran.</p>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Intérimaire - Agro-alimentaire</h4>
                      <p>Gastronome <span style="color: rgb(230, 77, 67);">•</span> Mars 2016 - Août 2016</p>
                    </div>
                    <div class="tl-body">
                      <p>Gestion de l'approvisionnement des opérateurs & gestion de la traçabilité (viandes et ingrédients).</p>
                    </div>
                  </div>
                </li>

                <li><div class="tltitle"><i class="fas fa-graduation-cap"></i> Formation</div></li>

                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Chef de projet Multimédia</h4>
                      <p>OpenClassrooms / IESA Multimédia <span style="color: rgb(230, 77, 67);">•</span> Janvier 2017 - Janvier 2018</p>
                    </div>
                    <div class="tl-body">
                      <p>Parcours de formation fonctionnant en "mode projet". </p>
                      <p>Six projets professionnalisant ont été réalisés durant le parcours (système de billeterie en ligne pour le Musée du Louvre, application web collaborative de saisie d'observation...)</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>L1 Arts du Spectacle</h4>
                      <p>Université de Poitiers <span style="color: rgb(230, 77, 67);">•</span> 2015 - 2016 </p>
                    </div>
                    <div class="tl-body">
                      <p>Etude des arts du spectacle (Cinéma & Théâtre).</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Baccalauréat ES</h4>
                      <p>Lycée Maurice Genevoix <span style="color: rgb(230, 77, 67);">•</span> 2015</p>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Compétences</h2>
            <hr>
            <div id="skills-percentage" class="row">
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p80 center tomato">
                  <span>80%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Html & CSS</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p65 center tomato">
                  <span>65%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Php & Sql</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p60 center tomato">
                  <span>60%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Symfony</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p60 center tomato">
                  <span>60%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Javascript</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p80 center tomato">
                  <span>80%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">WordPress</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p55 center tomato">
                  <span>55%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Git & Github</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p70 center tomato">
                  <span>70%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Bootstrap</p>
              </div>
              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p50 center tomato">
                  <span>50%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Photoshop</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="project" class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Réalisations</h2>
              <hr>
            </div>

            <div class="col-md-12 text-center sec-btn-gallery">
                <button type="button" class="btn btn-primary all">Tous</button>
                <button type="button" class="btn btn-primary school">Projets d'école</button>
                <button id="btn-margin" type="button" class="btn btn-primary pro">Projets professionnels</button>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://moncoutant.arthurgeay.fr/">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/moncoutant2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Réalisation d'un site web pour les activités culturelles de ma ville. <br />
                    <span class="badge badge-pill badge-danger">HTML & CSS</span>
                    <span class="badge badge-pill badge-info">WordPress</span>
                  </p>
                </div>
              </div>
             </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/project.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Simulation - Gestion de projet du salon du chocolat de Paris. <br />
                    <span class="badge badge-pill badge-light">Gestion de projet</span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://jeanforteroche.arthurgeay.fr/">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/forteroche2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Réalisation d'un blog pour un écrivain ne souhaitant pas avoir un blog sous WordPress.<br />
                      <span class="badge badge-pill badge-danger">HTML & CSS</span>
                      <span class="badge badge-pill badge-secondary">PHP & SQL</span>
                      <span class="badge badge-pill badge-success">Silex</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://louvre.arthurgeay.fr/">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/louvre2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Réalisation d'un système de billeterie pour le musée du Louvre. <br />
                      <span class="badge badge-pill badge-danger">HTML & CSS</span>
                      <span class="badge badge-pill badge-primary">Symfony</span>
                      <span class="badge badge-pill badge-warning">Javascript</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://nao.arthurgeay.fr/">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/nao.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Réalisation d'une application web collaborative de saisie d'observation d'espèces d'oiseaux. <br />
                      <span class="badge badge-pill badge-danger">HTML & CSS</span>
                      <span class="badge badge-pill badge-primary">Symfony</span>
                      <span class="badge badge-pill badge-warning">Javascript</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://openclassrooms.com/courses/4840981?status=waiting-for-publication">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="img/course-joomla.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Rédaction d'un cours pour apprendre à créer un site web avec Joomla sur OpenClassrooms. <br />
                      <span class="badge badge-pill badge-light">Pédagogie / Enseignement</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap pro-item">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/carmanager.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Réalisation d'une application web de gestion de flotte de véhicule pour la société Duotech. <br />
                    <span class="badge badge-pill badge-danger">HTML & CSS</span>
                    <span class="badge badge-pill badge-primary">Symfony</span>
                    <span class="badge badge-pill badge-warning">Javascript</span>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Contact</h2>
              <hr>

              <?php
                if(isset($_SESSION['success']) && !empty($_SESSION['success']))
                {
              ?>
              <div class="alert alert-success">
                <?= $_SESSION['success']; ?>
              </div>
              <?php unset($_SESSION['success']); } ?>


              <?php if(isset($_SESSION['error']) && !empty($_SESSION['error']))
                {
                  foreach($_SESSION['error'] as $error)
                  {
              ?>
              <div class="alert alert-danger">
                <?= $error; ?>
              </div>
              <?php unset($_SESSION['error']);
                }
              }
              ?>

              <form action="mail.php" method="POST">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom" value="<?php if(isset($_SESSION['firstname'])) echo $_SESSION['firstname']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Adresse e-mail" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message" rows="6" required><?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?></textarea>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name="accept-form" value="" required>
                  <label class="form-check-label" for="defaultCheck1">
                    En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient utilisées pour permettre de me recontacter dans le cadre de la relation commerciale qui découle de cette demande de devis.
                  </label>
                </div>
              </div>
              <div class="g-recaptcha" data-sitekey="<?= $publicKey; ?>"></div>
              <button id="submitForm" type="submit" class="btn btn-primary col-md-12"><i class="fas fa-share-square"></i> Envoyer</button>
            </form>

          </div>
        </div>
      </section>

      <footer class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center"><a href="index.php">Arthur Geay • Portfolio</a> - <a href="mentions-legales.html">Mentions légales</a> - <a href="politique-protection-donnees-personnelles.html">Politique de protection des données personnelles</a></p>
          </div>
        </div>
      </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/notify.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>
