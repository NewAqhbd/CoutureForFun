<header>
    <div class="top-bar d-flex justify-content-between align-items-center">
        <div class="col-4">
            <a href="/Web_L2/view/index.php">
                <img src="/Web_L2/assets/logo_WEB_black.png" alt="logo">
            </a>
        </div>
        <!-- Espace à gauche de 4 unités pour centrer le titre -->
        <div class="col-4 text-center"> <!-- Partie centrale de 4 unités pour le titre -->
            <h2>Couture for Fun</h2>
        </div>
        <div class="col-2 d-flex justify-content-end"> <!-- Partie droite de 2 unités pour le bouton connexion -->
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
        <div class="col-2"> <!-- Partie droite de 2 unités pour le bouton inscription -->
            <form action="/Web_L2/controller/inscriptionController.php" method="post">
                <input type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">
            </form>
        </div>
    </div>
</header>