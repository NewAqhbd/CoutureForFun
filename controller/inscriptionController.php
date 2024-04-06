<?php
require "../model/Inscription.php";
require "../bdd.php";

if (isset($_POST["inscription"])) {
    header("Location: /Web_L2/view/inscription.php");
}

if (isset($_POST["create_user"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $mdp_confirm = $_POST["mdp_confirmation"];

    if ($mdp == $mdp_confirm) {
        if(create_account($mail, $mdp)) {
            header("Location: /Web_L2/view/index.php");
        }
        else {
            session_start();
            $_SESSION["erreur"] = "Ce mail existe déjà. Veuillez en choisir un autre.";
            header("Location: /Web_L2/view/inscription.php");
        }
    }
    else { 
        session_start();
        $_SESSION["erreur"] = "Mots de passe différends.";
        header("Location: /Web_L2/view/inscription.php");   
    }

}

?>