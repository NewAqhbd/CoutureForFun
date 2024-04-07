<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/Web_L2/lib/video_style.css">

    <title>Cours</title>
</head>

<header>
    <div class="top-bar d-flex justify-content-between align-items-center">
        <div class="col-md-11 mx-auto text-center"> <!-- Utilisation de la classe mx-auto -->
            <h2>Couture for Fun</h2>
        </div>
        <div class="col-md-1 d-flex justify-content-end">
            <form action="/Web_L2/controller/inscriptionController.php" method="post">
                <div class="col-2 d-flex justify-content-end me-4">
                    <input type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">
                </div>
            </form>
            <?php
                if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) { ?>
                    <form action="/Web_L2/controller/connexionController.php" method="post">
                        <div class="col-2 d-flex justify-content-end ms-4">
                            <input type="submit" name="deconnexion" value="Se déconnecter" class="btn btn-primary">
                        </div>
                    </form>
                <?php
                }
                else { ?>
                    <form action="/Web_L2/controller/connexionController.php" method="post">
                        <div class="col-2 d-flex justify-content-end ms-4">
                            <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
                        </div>
                    </form>
                <?php
                }
            ?>
        </div>
    </div>
</header>

<?php
    $is_connecte = false;
    if (isset($_SESSION["id"])) {
        $id_u = $_SESSION["id"];
        $is_connecte = true;
    }
?>

<body>
    <?php
    if (isset($data) && $is_connecte) {
        foreach ($data as $cours) {
            $id_c = $cours["id_cours"]; ?>

            <div id="debutant-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-title"></div>
                <div class="carousel-inner">
                    <div class="carousel-item active c-item">
                        <img src="/Web_L2/assets/images/debutant1.png" class="d-block w-100 c-img small-carousel-img" alt="Slide 1">
                        <div class="carousel-caption top-0 mt-4">
                            <h1 class="fw-bolder"><?= $cours["titre"] ?></h1>
                            <p class="mt-5 fs-3"><?= $cours["prof"] ?></p>
                            <p class="mt-5 fs-3"><?= $cours["description"] ?></p>
                            <?php
                            if (is_inscrit($id_c, $id_u)) { ?>
                                <form action="/Web_L2/controller/coursController.php" method="post">
                                    <input type="submit" name="desinscrire" class="btn btn-primary px-4 py-2 fs-3 mt-4" value="Se désinscrire">
                                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                                </form>
                            <?php 
                            }
                            else { ?>
                                <form action="/Web_L2/controller/coursController.php" method="post">
                                    <input type="submit" name="ins_cours" class="btn btn-primary px-4 py-2 fs-3 mt-4" value="S'inscrire">
                                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } 
    else if (isset($data) && !$is_connecte) {
        foreach ($data as $cours) { ?>
            <div id="debutant-carousel" class="carousel slide">
                <div class="carousel-title"></div>
                <div class="carousel-inner">
                    <div class="carousel-item active c-item">
                        <img src="/Web_L2/assets/images/debutant1.png" class="d-block w-100 c-img small-carousel-img" alt="Slide 1">
                        <div class="carousel-caption top-0 mt-4">
                            <h1 class="fw-bolder"><?= $cours["titre"] ?></h1>
                            <p class="mt-5 fs-3"><?= $cours["prof"] ?></p>
                            <p class="mt-5 fs-3"><?= $cours["description"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        } 
    ?>
        <form action="/Web_L2/controller/connexionController.php" method="post">
            <div class="col-2 d-flex justify-content-end">
                <input type="submit" value="Se connecter" class="btn btn-primary">
            </div>
            <input type="hidden" name="connexion">
        </form>
    <?php
    }
    ?>


</body>
<footer class="footer bg-dark text-light">
    <div id="informations" class="container">
      <div class="row">
        <div class="col-4">
          <h3>Coordonnées de l'entreprise</h3>
          <p id="adresse">Adresse: 10 rue du pont</p>
          <p id="telephone">Téléphone: +01 23 45 67 89</p>
          <p id="email">Email: coutureForFun@jmail.com</p>
        </div>
        <div class="col-4">
          <h3>Horaires d'ouverture</h3>
          <p>Lundi - Vendredi: 9h00 - 18h00</p>
          <p>Samedi: 10h00 - 16h00</p>
          <p>Dimanche: Fermé</p>
        </div>
        <div class="col-4">
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