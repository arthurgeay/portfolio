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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-mfizz/2.4.1/font-mfizz.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/circle.css">
    <title>Portfolio - Arthur Geay</title>
  </head>
  <body id="page-top" class="overflow-x">
      <header>
        <div id="background">
          <noscript>
            <div class="container-fluid text-center">
              <p>Veuillez utiliser un navigateur internet moderne avec JavaScript activé pour naviguer sur arthurgeay.fr</p>
            </div>
          </noscript>
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand flex-size" href="#page-top">Arthur Geay</a>
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
                  <li class="nav-item">
                    <a class="btn btn-outline-primary navbar-btn" href="https://blog.arthurgeay.fr">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="empty flex-size"></div>
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
            <img class="rounded-circle profile-img lazyload" data-src="img/profile.jpeg" alt="Photo de profil" width="200px" />
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
                      <h4>Testeur de produit</h4>
                      <p><a href="https://www.envoliis.com/" class="company-link">ENVOLiiS</a> <span style="color: rgb(230, 77, 67);">•</span> Juillet 2019 - Août 2019</p>
                    </div>
                    <div class="tl-body">
                      <p><strong>Les missions : </strong></p>
                      <p> • Mise en place d'un POC sur plusieurs solutions</p>
                      <p> • Intégration de données existantes dans les nouveaux outils</p>
                      <p> • Documentation</p>
                    </div>
                  </div>
                </li>

                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Développeur Base de données</h4>
                      <p><a href="https://www.envoliis.com/" class="company-link">ENVOLiiS</a> <span style="color: rgb(230, 77, 67);">•</span> Novembre 2018 - Juin 2019</p>
                    </div>
                    <div class="tl-body">
                      <p><strong>Les missions : </strong></p>
                      <p> • Débôguage d'une base de données Access</p>
                      <p> • Remise en fonctionnement de la base de données</p>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Développeur web</h4>
                      <p><a href="https://www.envoliis.com/" class="company-link">ENVOLiiS</a> <span style="color: rgb(230, 77, 67);">•</span> Juillet 2018 - Août 2018</p>
                    </div>
                    <div class="tl-body">
                      <p><strong>Les missions : </strong></p>
                      <p> • Développement d'un portail Power BI</p>
                      <p> • Développement d'un outil d'import de contrat</p>
                    </div>
                  </div>
                </li>

                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Développeur web Freelance</h4>
                      <p>Développeur PHP/Symfony <span style="color: rgb(230, 77, 67);">•</span> Mai 2018 - Aujourd'hui</p>
                    </div>
                    <div class="tl-body">
                      <p>Création d'une auto-entreprise de développement web.</p>
                      <p><strong>Les missions : </strong></p>
                      <p> • Car Manager - Mai 2018 : <br />
                      Développement d'une application web destinée à gérer la flotte de véhicule des sociétés Duotech, Satelix et ARF.</p>
                      <p> • <a href="https://valerie-dauphin.fr">Valerie-dauphin.fr</a> - Juin 2018 : <br />
                      Développement d'un portfolio pour l'auteure de littérature jeunesse Valérie Dauphin.</p>
                    </div>
                  </div>
                </li>

                <li>
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

                <li class="timeline-inverted">
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
                      <h4>Bachelor informatique et systèmes d'information</h4>
                      <p><a href="https://www.ynov.com/formation/ynov-informatique/" class="company-link">Ynov Informatique</a> <span style="color: rgb(230, 77, 67);">•</span> Septembre 2018 - Aujourd'hui</p>
                    </div>
                    <div class="tl-body">
                      <p>La formation d’Ynov Informatique prépare au titre d’Expert Informatique et Systèmes d’Information, enregistré au Répertoire National de la Certification Professionnelle (RNCP) au niveau I.)</p>
                    </div>
                  </div>
                </li>

                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Chef de projet Multimédia</h4>
                      <p><a href="https://openclassrooms.com/fr/paths/21-chef-de-projet-multimedia-developpement" class="company-link">OpenClassrooms</a> / <a href="https://www.iesamultimedia.fr/" class="company-link">IESA Multimédia</a> <span style="color: rgb(230, 77, 67);">•</span> Janvier 2017 - Janvier 2018</p>
                    </div>
                    <div class="tl-body">
                      <p>Titre professionnel de Chef de projet multimédia enregistré au Répertoire National de la Certification Professionnelle (RNCP) au niveau II.)</p>
                      <p>Parcours de formation fonctionnant en "mode projet". </p>
                      <p>Six projets professionnalisant ont été réalisés durant le parcours (système de billeterie en ligne pour le Musée du Louvre, application web collaborative de saisie d'observation...)</p>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>L1 Arts du Spectacle</h4>
                      <p><a href="http://formations.univ-poitiers.fr/fr/index/licence-XA/licence-XA/licence-arts-du-spectacle-program-licence-arts-du-spectacle.html" class="company-link">Université de Poitiers</a> <span style="color: rgb(230, 77, 67);">•</span> 2015 - 2016 </p>
                    </div>
                    <div class="tl-body">
                      <p>Etude des arts du spectacle (Cinéma & Théâtre).</p>
                    </div>
                  </div>
                </li>

                <li class="timeline-inverted">
                  <div class="tl-circ"></div>
                  <div class="timeline-panel">
                    <div class="tl-heading">
                      <h4>Baccalauréat ES</h4>
                      <p><a href="http://www.genevoix-signoret-vinci.fr/" class="company-link">Lycée Maurice Genevoix</a> <span style="color: rgb(230, 77, 67);">•</span> 2015</p>
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
                <div class="c100 p100 center white">
                  <span><i class="icon-html5-alt" style="color: rgb(211, 58, 54)"></i> <i class="icon-css3" style="color: rgb(47, 80, 220)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Html & CSS</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-php" style="color: rgb(120, 124, 176)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Php</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-mysql" style="color: rgb(89, 107, 125)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">MySQL</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-symfony" style="color: #000000"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Symfony</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-javascript" style="color: rgb(237, 219, 103)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Javascript</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-wordpress" style="color: rgb(60, 117, 152)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">WordPress</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-git" style="color: rgb(222, 91, 64)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Git & Github</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="icon-bootstrap" style="color: rgb(88, 65, 131)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Bootstrap</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6  percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="fab fa-python" style="color: rgb(68, 115, 162)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Python</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6  percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="fab fa-node" style="color: rgb(92, 151, 87)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Nodejs</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6  percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="fab fa-angular" style="color: rgb(191, 16, 42)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Angular</p>
              </div>

              <div class="col-md-3 col-sm-3 col-6 percent text-center">
                <div class="c100 p100 center white">
                  <span><i class="fas fa-mobile" style="color: rgb(60, 125, 250)"></i></span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <p class="colored-p">Ionic</p>
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
                <img class="card-img-top lazyload" data-src="img/moncoutant2.jpg" alt="Card image cap">
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
                <img class="card-img-top lazyload" data-src="img/project.jpg" alt="Card image cap">
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
                  <img class="card-img-top lazyload" data-src="img/forteroche2.jpg" alt="Card image cap">
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
                  <img class="card-img-top lazyload" data-src="img/louvre2.jpg" alt="Card image cap">
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
                  <img class="card-img-top lazyload" data-src="img/nao.jpg" alt="Card image cap">
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
                  <img class="card-img-top lazyload" data-src="img/course-joomla.png" alt="Card image cap">
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
                <img class="card-img-top lazyload" data-src="img/carmanager.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Réalisation d'une application web de gestion de flotte de véhicule pour la société Duotech. <br />
                    <span class="badge badge-pill badge-danger">HTML & CSS</span>
                    <span class="badge badge-pill badge-primary">Symfony</span>
                    <span class="badge badge-pill badge-warning">Javascript</span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 img-wrap pro-item">
              <a href="https://valerie-dauphin.fr">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top lazyload" data-src="img/valerie-dauphin.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Réalisation d'un site web (portfolio) pour une auteure de littérature jeunesse. <br />
                      <span class="badge badge-pill badge-danger">HTML & CSS</span>
                      <span class="badge badge-pill badge-info">WordPress</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
              <a href="https://github.com/arthurgeay/iot-plante">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top lazyload" data-src="img/iot-flowers.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Développement d'un objet connecté et d'une interface web permettant d'aider les personnes voulant faire pousser des plantes chez eux.<br />
                      <span class="badge badge-pill badge-warning">Python</span>
                      <span class="badge badge-pill badge-primary">PHP</span>
                      <span class="badge badge-pill badge-info">SQL</span>
                      <span class="badge badge-pill badge-success">C</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 img-wrap school-item">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top lazyload" data-src="img/tricycle-extended.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Réalisation d'une application mobile et d'un objet connecté permettant aux utilisateurs de trier leurs déchets.<br />
                      <span class="badge badge-pill badge-danger">Angular</span>
                      <span class="badge badge-pill badge-primary">Ionic</span>
                      <span class="badge badge-pill badge-success">C</span>
                      <span class="badge badge-pill badge-warning">Nodejs / ExpressJs</span>
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
    <script src="js/lazyload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/notify.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>
