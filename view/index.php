<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couture for fun</title>
    <!-- Liens vers Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/Web_L2/lib/homepage_style.css">
    <script src="/Web_L2/lib/homepage_script.js"></script>
</head>

<body>

  <div class="top-bar d-flex justify-content-between align-items-center">
    <div class="col-5"></div>
    <div class="col-4 text-center">
      <h2>Couture for Fun</h2>
    </div>
    <div class="col-2 d-flex justify-content-end">
        <?php
        if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) { ?>
            <form action="/Web_L2/controller/connexionController.php" method="post">
                <input type="submit" name="deconnexion" value="Se déconnecter" class="btn btn-primary">
            </form>
        <?php
        }
        else { ?>
            <form action="/Web_L2/controller/connexionController.php" method="post">
                <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
            </form>
        <?php
        }
        ?>
    </div>
    <div class="col-1">
        <form action="/Web_L2/controller/inscriptionController.php" method="post">
            <input type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">
        </form>
    </div>
  </div>
  
      
  </div>
  <div class="container-fluid">
    <div class="row">

      <!-- Colonne fixe -->
      <div class="col fixed-column d-none d-md-block">
        <ul>
          <img src="/Web_L2/assets/logo_WEB_black.png" alt="logo">
          <li><a href="#services">Nos Services</a></li>
          <li><a href="#temoignages">Témoignages</a></li>
          <li><a href="#devis">Devis</a></li>
          <li><a href="#contacts">Contacts</a></li>
          <li><a href="#informations">Informations</a></li>
          <!-- Ajoutez plus d'éléments au besoin -->
        </ul>
      </div>

      <!-- Contenu principal -->
      <div class="col main-content">
        <section class="background-image">
          <div class="overlay"></div> <!-- Overlay pour l'assombrissement -->
          <div class="text">
            <h1>Couture for Fun</h1>
            <p>Des dizaines de cours en ligne pour maitriser la couture</p>
          </div>
        </section>
        <!-- Ajoutez plus de contenu au besoin -->
        <div id="services" class="container">
          <div class="row">
            <!-- Services proposés -->
            <div class="col-12">
              <h2>Nos Services</h2>
              <p>Les services que nous proposons sont principalement axés sur l'enseignement et la pratique de la couture. Nous offrons une gamme variée de cours pour répondre aux besoins de chacun :</p>
                <ul class="list-unstyled">
                  <li><span class="bullet">&#8226;</span> Cours de couture pour débutants</li>
                  <li><span class="bullet">&#8226;</span> Cours de couture avec des patrons pour pratiquer des techniques avancées</li>
                  <li><span class="bullet">&#8226;</span> Cours de couture avancée pour perfectionner vos compétences</li>
                  <li><span class="bullet">&#8226;</span> Ateliers de création de vêtements sur mesure</li>
                  <li><span class="bullet">&#8226;</span> Réparations et ajustements de vêtements</li>
                  <li><span class="bullet">&#8226;</span> Conseils en stylisme et choix de tissus</li>
                </ul>
                <div class="col-12 d-flex justify-content-center">
                  <a href="video.html" class="btn btn-primary">Accéder aux cours en ligne</a>
                </div>
            </div>
            <!-- Témoignages -->
            <div id="temoignages" class="col-12 " >
              <h2>Témoignages</h2>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Alain Martin</h5>
                  <p class="card-text">"J'ai adoré prendre des cours de couture chez Couture for Fun. Les instructeurs
                    étaient très compétents et patients."</p>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Alice Martino</h5>
                  <p class="card-text">"Grâce à Couture for Fun, j'ai pu réaliser ma propre robe de mariée. Je
                    recommande leurs services à tous ceux qui veulent apprendre la couture."</p>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Anne Martinez</h5>
                  <p class="card-text">"Les ateliers de couture de Couture for Fun sont une expérience incroyable. J'ai
                    beaucoup appris et je me sens plus confiant dans mes compétences en couture."</p>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Anaelle Martinet</h5>
                  <p class="card-text">"Je suis très satisfait des réparations de vêtements que j'ai faites chez Couture
                    for Fun. Le service était rapide et le résultat était impeccable."</p>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Alexandre Martinovich</h5>
                  <p class="card-text">"Je ne suis pas entièrement satisfait des services de Couture for Fun. J'ai
                    trouvé que les instructeurs manquaient parfois de professionnalisme."</p>
                </div>
              </div>
            </div>
            <div id="devis" class="col-12 " >
                <h2>Nos devis</h2>
                <p>Obtenez un devis personnalisé pour nos services en remplissant le formulaire, après avoir cliqué sur le bouton ci-dessous. Nous vous répondrons dans les plus brefs délais avec une offre adaptée à vos besoins.</p>
                <div class="col-12 d-flex justify-content-center">
                    <form action="/Web_L2/controller/devisController.php" method="post">
                        <input type="submit" name="devis" class="btn btn-primary" value="Accéder au devis">
                    </form>
                </div>
            </div>
            <div id="contacts" class="col-12 " >
              <h2>Nos Contacs</h2>
              <p>Pour toute question, demande de renseignements ou prise de rendez-vous cliquez sur le bouton ci-dessous.</p>
                <div class="col-12 d-flex justify-content-center">
                    <form action="/Web_L2/controller/contactController.php" method="post">
                        <input type="submit" name="contact" class="btn btn-primary" value="Accéder aux contacts">
                    </form>
                </div>
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Liens vers Bootstrap JS (pour les fonctionnalités avancées) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
<!-- Bandeau en bas -->
<footer class="footer bg-dark text-light">
  <div id="informations" class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12"></div>
      <div class="col-lg-3 col-md-12 text-center">
          <h3>Coordonnées de l'entreprise</h3>
          <p id="adresse">Adresse: 10 rue du pont</p>
          <p id="telephone">Téléphone: +01 23 45 67 89</p>
          <p id="email">Email: coutureForFun@jmail.com</p>
      </div>
      <div class="col-lg-3 col-md-12 text-center">
          <h3>Horaires d'ouverture</h3>
          <p>Lundi - Vendredi: 9h00 - 18h00</p>
          <p>Samedi: 10h00 - 16h00</p>
          <p>Dimanche: Fermé</p>
      </div>
      <div class="col-lg-3 col-md-12 text-center">
          <h3>Réseaux sociaux</h3>
          <ul class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
          </ul>
      </div>
  </div>
    <div class="row">
      <div class="col-12 text-center"> <!-- Ajoutez la classe text-center ici -->
        <p>© Couture for Fun 2024 . Tous droits réservés.</p>
      </div>
    </div>
  </div>
</footer>

</html>