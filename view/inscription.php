<body>
    <div class="container">
        <div class="row elements">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h1>Inscription</h1>
                        <?php
                            session_start();
                            if (isset($_SESSION["erreur"])) {
                                echo '<div class="alert alert-danger" role="alert">'. $_SESSION["erreur"] .'</div>';
                                unset($_SESSION['erreur']);
                            }
                        ?>
                        <form action="/Web_L2/controller/inscriptionController.php" method="post">
                            <input type="email" name="mail" id="mail" class="form-control my-4 py-2" placeholder="Mail" required>
                            <input type="password" name="mdp" id="mdp" class="form-control my-4 py-2" placeholder="Mot de passe" required>
                            <input type="password" name="mdp_confirmation" id="mdp" class="form-control my-4 py-2" placeholder="Confirmer mot de passe" required>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                            <input type="hidden" name="create_user">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
