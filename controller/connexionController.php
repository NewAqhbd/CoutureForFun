<?php
require "../model/Connexion.php";
require "../bdd.php";

if (isset($_POST["connexion"])) {
    header("Location: /Web_L2/view/connexion.php");
}

if (isset($_POST['deconnexion'])){
    session_destroy();
    session_start();
    $_SESSION['connecte'] = false;   
    header("Location: /Web_L2/view/index.php");
}

if(isset($_POST["connecter"])){
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    if(connexion($mail, $mdp)) {
        header("Location: /Web_L2/view/index.php");
    }
    else {
        session_start();
        $_SESSION["erreur"] = "Mauvais mail ou mot de passe";
        header("Location: ../view/connexion.php");
    }
}




?>