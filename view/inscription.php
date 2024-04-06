<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<?php
    session_start();
    if (isset($_SESSION["erreur"])) {
        echo '<script>alert("'. $_SESSION["erreur"] .'")</script>';
        unset($_SESSION['erreur']);
    }
?>

<body>
    <form action="/Web_L2/controller/inscriptionController.php" method="post">
        <input type="text" name="mail" id="mail" placeholder="Mail">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
        <input type="password" name="mdp_confirmation" id="mdp" placeholder="Confirmer mot de passe" required>

        <input type="submit" value="S'inscrire">
        <input type="hidden" name="create_user">
    </form>
</body>
</html>