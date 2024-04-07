<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Web_L2/lib/connexion_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Connexion</title>
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

<body>
    <div class="container">
        <div class="row elements">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h1>Connexion</h1>
                        <?php
                            session_start();
                            if (isset($_SESSION["erreur"])) {
                                echo '<div class="alert alert-danger" role="alert">'. $_SESSION["erreur"] .'</div>';
                                unset($_SESSION["erreur"]);
                            }    
                        ?>

                        <form action="/Web_L2/controller/connexionController.php" method="post">
                            <input type="email" name="mail" id="mail" class="form-control my-4 py-2" placeholder="Mail" required>
                            <input type="password" name="mdp" id="mdp" class="form-control my-4 py-2" placeholder="Mot de passe" required>
                            <div class="text-center">
                                <input type="submit" value="Se connecter" class="btn btn-primary">
                            </div>
                            <input type="hidden" name="connecter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
