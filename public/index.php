<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="">
      <meta name="author" content="">

      <title>Le chenil de Ivan</title>

      <link rel="preconnect" href="https://fonts.googleapis.com">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

      <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

      <link href="/css/bootstrap.min.css" rel="stylesheet">

      <link href="/css/bootstrap-icons.css" rel="stylesheet">

      <link rel="stylesheet" href="/css/chenil.css">

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="/scripts/script.js"></script>

  </head>

  <body>

      <div class="container-fluid">
          <div class="row">

              <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                  <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                      <a class="navbar-brand" href="index">
                          <img src="/images/cat-cute.png" class="logo-image img-fluid" align="">
                      </a>

                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link navig" href="//chenilivan.local/animal/index">Accueil</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link navig" href="/animal/index">Les animaux</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link navig" href="//chenilivan.local/proprietaire/index">Les propriétaires</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link navig" href="//chenilivan.local/sejour/index">Les séjours</a>
                          </li>
                      </ul>
                  </div>
              </nav>

              <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                  <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                          <div class="container">
                              <div class="row">

                                  <div class="top">
                                    <header class="header">
                                      <a id="image-accueil" href="//chenilivan.local/"  title="Revenir à l'accueil"><img  src="/images/dog-family.png"/></a>
                                      <h1 id="le-gros-titre">Le Chenil d'Ivanov</h1>
                                    </header>

                                  </div>

                                  <div class="col-lg-8 col-12">

                                      <p class="text-black"><strong>Bienvenue dans le chenil d'Ivanov!</strong> Vous pourrez y faire vos réservations de séjours pour vos bestiaux préférés.
                                      Bienvenue dans le chenil d'Ivanov. Vous pourrez y faire vos réservations de séjours pour vos bestiaux préférés.</p>

                                      <br>

                                  </div>
                              </div>
                          </div>

                          <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">

                              <h4><strong class="text-white">Checkez nos réservations</strong></h4>

                              <a href="/sejour/index" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Voir les résa</a>
                              <a href="/sejour/create" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Créer une résa</a>
                          </div>
                  </section>


                  <section class="about-section section-padding" id="section_2">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-12 col-12 mx-auto">

                                  <div class="border-bottom pb-3 mb-5">
                                    <?php
                                    include('../autoload.php');
                                    $router= new Router();
                                    /*avec le virtual host de wamp server, il crée un mini DNS, qu'on peut démarrer, redémarrer ou éteindre d'ailleurs;
                                    et avant d'aller chercher un annuaire DNS extérieur comme on le ferait pour surfer sur le Web, il va checker notre DNS en local, notre virtual host, qui a priorité.
                                    */
                                    ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>

          </div>

  </body>
</html>
