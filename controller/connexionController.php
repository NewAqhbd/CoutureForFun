<?php
require "../model/Connexion.php";
require "../bdd.php";

if (isset($_POST["connexion"])) {
    header("Location: /Web_L2/view/connexion.php");
}

if(isset($_POST['connecter'])){
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    var_dump($mail);
    var_dump($mdp);
    if(connexion($mail, $mdp)) {
        header("Location: /Web_L2/view/index.php");
    }
    else {
        session_start();
        $_SESSION["erreur"] = "Mauvais mail ou mot de passe";
        header("Location: ../view/connexion.php");
    }
}


if(isset($_POST['deconnexion'])){

    session_destroy();
    session_start();
    if(!isset($_SESSION['connecte'])){ 
        $_SESSION['connecte'] = False; //Initialisation de la variable de contrôle de l'état de connexion
        $_SESSION['type'] = null;
    }
    header("Location: /Web_L2/view/connexion.php");
}


?>