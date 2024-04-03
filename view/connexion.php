<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION["erreur"])) {
        echo '<script>alert("'. $_SESSION["erreur"] .'")</script>';
        unset($_SESSION['erreur']);
    }    
?>

    <form action="/Web_L2/controller/connexionController.php" method="post">
        <input type="text" name="mail" id="mail" placeholder="Mail">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">

        <input type="submit" value="Se connecter">
        <input type="hidden" name="connecter">
    </form>
</body>
</html>